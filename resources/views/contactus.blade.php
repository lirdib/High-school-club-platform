@extends('layouts.layout')

@section('content')

<div>
  <div class="container mt-5">
    <form action="/kontaktsend" enctype="multipart/form-data" method="post">
      @csrf
      <label for="name">Emër Mbiemër</label>
      <input type="text" id="name" name="name" placeholder="Emrin tuaj.."/>
      @error('name')<span class="text-danger">{{ $message }}</span>@enderror

      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Email.."/>
      @error('email')<span class="text-danger">{{ $message }}</span>@enderror

      <label for="subject">Subjekt</label>
      <input type="text" id="subject" name="subject" placeholder="Email.."/>
      @error('subject')<span class="text-danger">{{ $message }}</span>@enderror

      <label for="message">Mesazhi</label>
      <textarea id="message" name="message" placeholder="Shkruani diçka.." style="height:200px"></textarea>
      @error('message')<span class="text-danger">{{ $message }}</span>@enderror

      <input type="submit" value="Dërgo">

    </form>
  </div>
</div>

<style>
  input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

@endsection