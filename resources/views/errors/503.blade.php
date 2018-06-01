@extends('errors::layout')

@section('title', 'Service Unavailable')

@php ($msg = $exception->getMessage() ? $exception->getMessage() : 'Be right back.')

@section('message', $msg)
