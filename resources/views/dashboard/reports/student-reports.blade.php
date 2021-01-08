@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card text-black d-flex  bg-primary mb-3">Student's Offences</div>

                
                    @foreach ($reports as $report)
                    <div id="first" class="justify-content-center" style="max-width: 100%;">
                        <div class="bg-secondary card-header">{{$report->title}}</div>
                        <div class="card-body">
                          <h5 class="card-title">{{$report->created_at}}</h5>
                          <p class="card-text">{{$report->offence}}</p>
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
