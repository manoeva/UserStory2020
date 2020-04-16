<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Google\Cloud\Firestore\FirestoreClient;

class ScenarioController extends Controller
{
    public function validator($data, $rules, $message){
      return Validator::make($data, $rules, $message);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $project_id, $feature_id)
    {
      //validasi
      $message = [
        'name.required' => 'Anda belum mengisi nama project',
        'given.*.required' =>  'Ada skenario given yang belum diisi',
        'when.*.required' =>  'Ada skenario when yang belum diisi',
        'then.*.required' =>  'Ada skenario then yang belum diisi',
       ];
       $rules = [
          'name' => 'required',
       ];
       if($request->has('given')){
           $nbr = count($request->given) - 1;
           foreach(range(0, $nbr) as $index) {
             $rules[ 'given.' . $index] = 'required';
           }
       }
       if($request->has('when')){
           $nbr = count($request->given) - 1;
           foreach(range(0, $nbr) as $index) {
             $rules[ 'when.' . $index] = 'required';
           }
       }
       if($request->has('then')){
           $nbr = count($request->given) - 1;
           foreach(range(0, $nbr) as $index) {
             $rules[ 'then.' . $index] = 'required';
           }
       }
       $validator = $this->validator($request->all(), $rules, $message);
       if ($validator->fails()){
           return Redirect::back()->withInput()->with(['error' => $validator->errors()->first()]);
       }
       //proses simpan
      $db = new FirestoreClient([
      'projectId' => 'userstory-b84d4',
      ]);
      //simpan skenario
      $scenario = [
          'name' => $request->name,
      ];
      $save_scenario = $db->collection('projects')->document($project_id)->collection('userStories')
                       ->document($feature_id)->collection('scenarios')->add($scenario);
      //save Given
      for ($i=0; $i <count($request->given) ; $i++) {
        $given = [
          ''
          'content' => $request->given[$i],
        ];
        $save_scenario = $db->collection('projects')->document($project_id)->collection('userStories')->document($feature_id)
                         ->collection('scenarios')->document($save_scenario)->collection('given')->add($scenario);
      }
      // dd('Added document with ID:'.$addedDocRef->id());
      return redirect()->route('feature.show',['project_id'=>$project_id,'feature_id'=>$addedDocRef->id()])->with(['success'=>'User Story berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function get_html($id, $index)
    {
        $db = new FirestoreClient([
            'projectId' => 'userstory-b84d4',
        ]);
        
        $userStories = $db->collection('projects')->document($project_id)->collection('userStories')
                       ->document($id)->snapshot();
        $scenario = $userStories->scenarios[$index];
        
        $given = $scenario->given;
        $when = $scenario->when;
        $then = $scenario->then;
        
        for ($i=0; $i <count($given) ; $i++) {
            
        }
        
        
        for ($i=0; $i <count($when) ; $i++) {
            
        }
        
        
        for ($i=0; $i <count($then) ; $i++) {
            
        }
        
    }
}
