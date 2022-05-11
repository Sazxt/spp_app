@extends('layout.coloradmin')
@section('username', auth()->user()->name)
@section('level', $level)