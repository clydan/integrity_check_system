@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card text-black d-flex  bg-info mb-3"><h4>Student's Offences</h4></div>

                
                    @foreach ($reports as $report)
                    <div id="first" class="justify-content-center" style="max-width: 100%;">
                        <div class=" card-header"><H5 class="text-capitalize text-danger font-weight-bold">{{$report->title}}</H5></div>
                        <div class="card-body">
                          <h5 class="card-title"><small class="font-weight-light text-danger">{{$report->created_at}}</small></h5>
                          <p class="font-italic" class="card-text">{{$report->offence}}</p>
                        </div>
                    @endforeach
                    
                
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.2.0/jspdf.umd.min.js"></script>
<script>
    var doc = new jsPDF() 
    var h1 = document.querySelector('#first')
    doc.fromHTML(h1,15,15)
    doc.save('output')
</script>

@endsection
