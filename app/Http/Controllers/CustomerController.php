<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
  //Custsomer register page
  public function register(){
    return view('customer.register');
  }
  //Create customer account 
  public function create(Request $request){
      
    //Validdtion 
      $validator = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'dateOfBirth' => 'required',
        'phoneNumber' => 'required',
      ]);
       if($validator->fails()){
          return back()
                ->withErrors($validator)
                ->withInput();
             }

      $data = $this -> getCustomerData($request);
         
      Customer::create($data);

      return back()->with(['InsertSuccess' =>'User Information Recorted...']);
  }
  //Customer list page
  public function list(){
    $data = Customer::paginate(5);//object
    return view('customer.list')->with(['customer'=>$data]);
  }
  //Cuatomer Info SeeMore
  public function seeMore($id){
      $data = Customer::where('customer_id',$id)->get()->toArray();//Array
       return view('customer.seeMore')->with(['customer'=>$data]);
  }
  //Edit customer data
  public function edit($id){
    $data=Customer::where('customer_id',$id)->first();//Object
     return view('customer.edit')->with(['customer'=>$data]);
  }
  //Update customer data
  public function update($id,Request $request){
     //Validdtion 
     $validator = Validator::make($request->all(),[
      'name' => 'required',
      'email' => 'required',
      'address' => 'required',
      'gender' => 'required',
      'dateOfBirth' => 'required',
      'phoneNumber' => 'required',
     ],[
      'name.required' => 'နာမည်ဖြည့်ရန်လိုပါတယ်!',
      'email.required' => 'Email Required!',
    ]);
     if($validator->fails()){
        return back()
              ->withErrors($validator)
              ->withInput();
           }
     $updateData = $this->getCustomerData($request);
     $updateData['id'] = $id;
     Session::put('CUSTOMER_DATA',$updateData);
     return redirect()->route('customer#confirm');
  }
  //Delete customer data
  public function delete($id){
     Customer::where('customer_id',$id)->delete();
     return back()->with(['deleteSuccess'=>'Customer Data Deleted!']);
  }
  //customer confirm page
  public function confirm(){
    $data = Session::get('CUSTOMER_DATA');
    return view('customer.confirm')->with(['customer'=>$data]);
  }
  //real update customer data
  public function realUpdate(){
    $data = Session::get('CUSTOMER_DATA');
    $id = $data['id'];
    unset($data['id']);//remove id in data Array
    Session::forget('CUSTOMER_DATA');
    Customer::where('customer_id',$id)->update($data);
    return redirect()->route('customer#list')->with(['updateSuccess'=>'Customer Updated!']);
  }
  //Request customer data
  Private function getCustomerData($request){
    return [
          'name' =>$request->name,
          'email' =>$request->email,
          'address' =>$request->address,
          'gender' =>$request->gender,
          'date_of_birth' =>$request->dateOfBirth,
          'phone' =>$request->phoneNumber,
    ];
  }
}