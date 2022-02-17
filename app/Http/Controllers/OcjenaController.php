<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Ocjena;
use Illuminate\Http\Request;

class OcjenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $from='2019-01-01 00:00:00';
        // $to='2022-12-01 00:00:00';
    // $number_of_ocjenas = DB::table('ocjenas')
    // ->whereBetween('date',[$from,$to])
    // ->count();
    $most_common_edukators=DB::table('edukators')
        ->select('edukators.*', DB::raw('count(*) as brojac'))
        ->groupBy('edukators.id')
        ->join('ocjenas','edukators.id','=','ocjenas.edukator')
        ->orderByRaw('COUNT(*) DESC')
        ->get();

        $most_common_students=DB::table('students')
        ->select('students.*', DB::raw('count(*) as brojac'))
        ->groupBy('students.id')
        ->join('ocjenas','students.id','=','ocjenas.student')
        ->orderByRaw('COUNT(*) DESC')
        ->get();
        $most_common_predmets=DB::table('predmets')
        ->select('predmets.*', DB::raw('count(*) as brojac'))
        ->groupBy('predmets.id')
        ->join('ocjenas','predmets.id','=','ocjenas.predmet')
        ->orderByRaw('COUNT(*) DESC')
        ->get();


    $cazin_student_ocjenas= DB::table('students')
    ->select('students.*', DB::raw('count(*) as brojac'))
    ->groupBy('students.id')
    ->join('ocjenas','students.id','=', 'ocjenas.student')
    ->where('students.city','Cazin')
    ->get();
    $edu_profdrs= DB::table('edukators')
    ->select('edukators.*', DB::raw('count(*) as brojac'))
    ->groupBy('edukators.id')
    ->join('ocjenas','edukators.id','=', 'ocjenas.edukator')
    ->where('edukators.title','red.prof.dr.')
    ->get();
    $mostar_student_ocjenas= DB::table('students')
    ->select('students.*')
    ->groupBy('students.id')
    ->join('ocjenas','students.id','=', 'ocjenas.student')
    ->join('predmets','predmets.id','=', 'ocjenas.predmet')
    ->where('ocjenas.grade','10')
    ->where('predmets.name','Ekonomika')
    ->where('students.city','Mostar')

    ->get();
    $from='2019-01-01 00:00:00';
    $to='2020-01-01 00:00:00';
    $datum_student_ocjenas= DB::table('students')
    ->select('students.*')
    ->groupBy('students.id')
    ->join('ocjenas','students.id','=', 'ocjenas.student')
    ->join('predmets','predmets.id','=', 'ocjenas.predmet')
    ->whereBetween('date',[$from,$to])
    ->where('predmets.name','Ekonomika')
    ->get();


    $Informatika_students= DB::table('students')
    ->select('students.*')
    ->groupBy('students.id')
    ->join('statuses','statuses.id','=', 'students.status')
    ->where('statuses.studyProgram','Informatika')
    ->get();
    $Redovni_students= DB::table('students')
    ->select('students.*')
    ->groupBy('students.id')
    ->join('statuses','statuses.id','=', 'students.status')
    ->where('statuses.modeOfStudy','Redovan')

    ->get();
    $Informatika_vanredni= DB::table('students')
    ->select('students.*')
    ->groupBy('students.id')
    ->join('statuses','statuses.id','=', 'students.status')
    ->where('statuses.studyProgram','Informatika')
    ->where('statuses.modeOfStudy','Vanredni')
    ->where('students.city','Bihać')


    ->get();
    // Ispis studenata iz Bihaća koji su 2000godiste ili mlađi i imaju ocjenu iz predmeta Elektronika
    $from='2000-01-01 00:00:00';
    $to='2022-01-01 00:00:00';
    $Vkl_21age_Elektronikas=DB::table('students')
  ->select('students.*')
  ->groupBy('students.id')
  ->join('ocjenas','students.id','=', 'ocjenas.student')
  ->join('predmets','predmets.id','=', 'ocjenas.predmet')
  ->whereBetween('BDate',[$from,$to])
  ->where('predmets.name','Elektronika')
  ->where('students.city','Bihać')

  ->get();

  $from=1;
  $to=500;
  $Czn_ages=DB::table('students')
->select('students.*')
->groupBy('students.id')
->whereBetween('index',[$from,$to])
  ->get();

    return view('ocjenas.index',
    [
        // 'number_of_ocjenas'=>$number_of_ocjenas,
    'most_common_edukators'=>$most_common_edukators,
    'most_common_students'=>$most_common_students,
    'most_common_predmets'=>$most_common_predmets,
    'mostar_student_ocjenas'=>$mostar_student_ocjenas,
    'cazin_student_ocjenas'=>$cazin_student_ocjenas,
    'datum_student_ocjenas'=>$datum_student_ocjenas,
    'Vkl_21age_Elektronikas'=>$Vkl_21age_Elektronikas,
    'Czn_ages'=> $Czn_ages,
    'edu_profdrs'=>$edu_profdrs,
    'Informatika_students'=>$Informatika_students,
'Redovni_students'=>$Redovni_students,
'Informatika_vanredni'=>$Informatika_vanredni

]);


        $ocjenas=DB::table('ocjenas')
        ->get();
return view('ocjenas.index',['ocjenas'=>$ocjenas]);











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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ocjena  $ocjena
     * @return \Illuminate\Http\Response
     */
    public function show(Ocjena $ocjena)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ocjena  $ocjena
     * @return \Illuminate\Http\Response
     */
    public function edit(Ocjena $ocjena)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ocjena  $ocjena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ocjena $ocjena)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ocjena  $ocjena
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ocjena $ocjena)
    {
        //
    }
}
