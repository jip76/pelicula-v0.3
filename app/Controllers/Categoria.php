<?php

namespace App\Controllers;

use App\Models\CategoriaModel;


class Categoria extends BaseController
{
    public function show($id)
    {
       $categoriaModel = new CategoriaModel();
       
       echo  view('categoria/show',[
        'categoria' => $categoriaModel->find($id)
       ]);
    }
    public function create()
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->insert([
            'titulo'=> $this->request->getPost('titulo'),
            
        ]);
       
        echo 'ya esta creado ing';
    }
    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();

        echo view('categoria/edit',[
            'categoria' =>  $categoriaModel->find($id)
        ]);
    }
    public function update($id)
    {
        $categoriaModel =new CategoriaModel();
        $categoriaModel->update($id,[
            'titulo'=>$this->request->getPost('titulo'),
        ]);

        echo 'ing se actualizo';
    }
    public function new()
    {
        echo view('categoria/new',[
            'categoria'=>[
                'titulo'=>'',
                'descripcion'=>'',
            ]
        ]);
    }
    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);

        echo 'Se ha eliminado';
    }

    public function index()
    {
        $categoriaModel = new CategoriaModel();
        echo view('categoria/index',[
            'categorias'=> $categoriaModel->findAll()
        ]);
    }
}
