<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tools API Route
|--------------------------------------------------------------------------
*/
Route::controller(ToolSetupController::class)->prefix('tool')->group(function(){
	/*
	|--------------------------------------------------------------------------
	| Wolframalpha API Route
	|--------------------------------------------------------------------------
	*/
	Route::post('integral', 				   'integral'				   )->name('integral'		 			 );
	Route::post('improper-integral', 		   'improperIntegral'		   )->name('improper-integral'			 );
	Route::post('partial-fraction-integration','partialFractionIntegration')->name('partial-fraction-integration');
	Route::post('definite-integral', 		   'definiteIntegral'		   )->name('definite-integral'			 );
	Route::post('indefinite-integral',	 	   'indefiniteIntegral'		   )->name('indefinite-integral'		 );
	Route::post('laplace-transform', 		   'laplaceTransform'		   )->name('laplace-transform'			 );
	Route::post('fourier-transform', 		   'fourierTransform'		   )->name('fourier-transform'			 );
	Route::post('u-substitution', 			   'uSubstitution'			   )->name('u-substitution'				 );
	Route::post('trigonometric-substitution',  'trigonometricSubstitution' )->name('trigonometric-substitution'	 );
	Route::post('integration-by-parts', 	   'integrationByParts'		   )->name('integration-by-parts'		 );
	Route::post('long-division-calculator',    'longDivision'			   )->name('long-division-calculator'	 );
  	Route::post('area-under-the-curve', 	   'areaUnderTheCurve'		   )->name('area-under-the-curve'		 );
  	Route::post('riemann-sum', 				   'riemannSum'				   )->name('riemann-sum'				 );
  	Route::post('trapezoidal-rule', 		   'trapezoidalRule'		   )->name('trapezoidal-rule'			 );
  	Route::post('area-between-the-curve', 	   'areabetweencurve'		   )->name('area-between-the-curve'		 );
  	Route::post('simpson-s-rule', 			   'simpsonsRule'			   )->name('simpson-s-rule'				 );
 	Route::post('arc-length', 				   'arcLength'				   )->name('arc-length'					 );
 	Route::post('arc-length-of-polar-curve',   'arcLengthofPolarcurve'	   )->name('arc-length-of-polar-curve'	 );
 	Route::post('limit-of-sum', 			   'limitofSum'				   )->name('limit-of-sum'				 );
 	Route::post('mid-point-rule', 			   'midpointRule'			   )->name('mid-point-rule'				 );

 	/*
	|--------------------------------------------------------------------------
	| SymPy API Route
	|--------------------------------------------------------------------------
	*/
	Route::post('double-integral', 				'doubleIntegral'		   )->name('double-integral'			 );
	Route::post('tripple-integral', 			'trippleIntegral'		   )->name('tripple-integral'			 );
	Route::post('shell-method', 				'shellMethod'			   )->name('shell-method'			 	 );
	Route::post('washer-method', 				'washerMethod'			   )->name('washer-method'			 	 );
	Route::post('disc-method', 					'discMethod'			   )->name('disc-method'			 	 );
});