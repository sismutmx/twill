@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Cover image'
    ])

    @formField('browser', [
        'moduleName' => 'categories',
        'name' => 'categories',
        'label' => 'Categories',
        'max' => 1,
    ])

    @formField('tags')
    @formField('block_editor')

@stop
