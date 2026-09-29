<?php

use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoEdit;
use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/produto', ProdutoIndex::class)->name('produto.index');
Route::get('/produto/edit/{$id}', ProdutoEdit::class)->name('produto.edit');
Route::get('/produto/create', ProdutoCreate::class)->name('produto.create');