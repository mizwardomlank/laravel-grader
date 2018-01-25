<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});

/* Test Input Online Judge */

Route::get('/test-input', 'ProblemController@index');
Route::post('/test-input', 'ProblemController@store');


/* Online Judge */

Route::get('saveScript', function () {
	$param = '#include <stdio.h>
int main()
{
	printf("Hello World Cuy\n");
	return 0;
}'; // here is the script
  return mizwardomlank\Grader::saveScript("c", $param);
});

Route::get('compile/{script}', function ($param) {
	// $param = "script_12031364091415211460.c";
	
  return mizwardomlank\Grader::compile($param);
});

Route::get('saveInput', function () {
	$param = "1"; // here is input program
  return mizwardomlank\Grader::saveInput($param);
});

Route::get('run/{script}/{input}', function ($script, $input) {
	// $script = 'script_12031364091415211460.c';
	// $input = 'input_7204332951415211535.txt';
  return mizwardomlank\Grader::run($script, $input, 1, 32000);
});

Route::get('compareProgram/{script1}/{script2}/{input}', function ($script1, $script2, $input) {
	// $script1 = 'script_12031364091415211460.c';
	// $script2 = 'script_12031364091415211460.c';
	// $input = 'input_7204332951415211535.txt';
  return mizwardomlank\Grader::compareProgram($script1, $script2, $input, 1, 338592);

});

Auth::routes();

Route::get('/home', 'HomeController@index');
