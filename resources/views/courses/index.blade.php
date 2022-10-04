@extends('theme.base')
@section('content')
<div class="container py-5 text-center">
<h1>Lista de Cursos</h1>
        <table class="table">
            <tr>
                <th>Curso</th>
                <th>Nivel Academico</th>
                <th>Horas Academicas</th>
                <th>Profesor</th>
                <th>Estudiantes Inscritos</th>
            </tr>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->level }}</td>
                    <td>{{ $course->hours }}</td>
                    <td>{{ $course->teacher }}</td>
                    <td>
                    @foreach ($course->estudent as $estudent)
                        {{ $estudent->estudent }} <br>
                    @endforeach
                    </td>
                </tr>
            @endforeach
        </table>
</div>

@endsection