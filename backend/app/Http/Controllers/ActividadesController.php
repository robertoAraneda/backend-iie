<?php

namespace App\Http\Controllers;

use App\Actividades;
use App\Http\Resources\Actividades as ResourceActividades;
use App\ReplaceChar;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return (ResourceActividades::collection(Actividades::paginate()))->response();
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $activities = Actividades::where('idactividad', $id)->first();

    $activities->nombre = ReplaceChar::replaceStrangeCharacterString($activities->nombre);

    return response()->json([
      'data' => $activities,
      'links' => [
        'href' => 'http://localhost:8000/api/actividades/' . $id,
        'type' => 'GET'
      ]
    ], 200);
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
}
