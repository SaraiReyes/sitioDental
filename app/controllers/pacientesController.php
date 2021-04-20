<?php 

class pacientesController extends Controller {
  function __construct()
  {
  }
  
  function index() {
    View::render('index');
  }
  function ver($id){
    View::render('ver');
  }
  function revisar($id){
    View::render('revisar');
  }

}