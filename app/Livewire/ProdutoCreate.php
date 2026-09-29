<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $produto;
    public $unid_medida;
    public $preco;
    public $qtd_estoque;
    public $qtd_minima;
    public $data_val;
    public $aplicacao;

    public function salvar(){

    $this->validate([
        'produto' => 'required | string | unique',
        'unid_medida' => 'required | string',
        'preco' => 'required | decimal',
        'qtd_estoque' => 'required | integer',
        'qtd_minima' => 'required | integer',
        'data_val' => 'nullable | date',
        'aplicacao' => 'nullable | string',
    ]);


        Produto::create([
        'produto' => $this->produto,
        'unid_medida' => $this->unid_medida,
        'preco' => $this->preco,
        'quantidade' => $this->quantidade,
        'data_val' => $this->produto,
        'aplicacao' => $this->aplicacao,
        ]);

        session()->flash(
            'success', 'Produto cadastrado'
        );

        return redirect()->route('produto.index');
    }
}
