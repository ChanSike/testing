<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function getDetails()
   {
     dd('Admin controller running.....');
   }

   public function one()
   {
    dd('one');
   }

   public function two()
   {
    dd('two');
   }

   public function three()
   {
    dd('three');
   }
}
