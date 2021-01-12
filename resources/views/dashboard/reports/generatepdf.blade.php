<h1>Student Name: {{$student->name}}</h1>
@foreach ($reports as $item)

<h3>{{$item->title}}</h3><br><br>
<small>{{$item->created_at}}</small><br><br><br><br>

<h4><i>{{$item->offence}}</i></h4>
    
@endforeach