@extends ('layouts.app')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear una nueva asignatura</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('asignaturas.store') }}" >
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Nombre Asignatura</label>
                                <input type="text" name="asignatura" id="asignatura" class="form-control">
                            </div>
                            
                            <div class="form-group  mb-3">
                                <<label for="semestre">Semestre:</label>
        <select id="semestre" name="opcion">
            <option value="semestre">Semestre 1</option>
            <option value="semestre">Semestre 2</option>
            <option value="semestre">Semestre 3</option>
            <option value="semestre">Semestre 4</option>
            <option value="semestre">Semestre 5</option>
            <option value="semestre">Semestre 6</option>
            <option value="semestre">Semestre 7</option>
            <option value="semestre">Semestre 8</option>
            <option value="semestre">Semestre 9</option>
            <option value="semestre">Semestre 10</option>
            
        </select>
                            </div>

                            <div class="form-group  mb-3">
                                <label for="creditos">Creditos</label>
                                <textarea name="creditos" id="creditos" rows="5" class="form-control"> </textarea>
                            </div>

                            <div class="form-group  mb-3">
                                <label for="docente">Nombre de Docente</label>
                                <textarea name="docente" id="docente" rows="5" class="form-control"> </textarea>
                            </div>

                            <div class="form-group  mb-3">
                                <label for="prerrequisito">Prerrequisitos</label>
                                <textarea name="prerrequisito" id="prerrequisito" rows="5" class="form-control"> </textarea>
                            </div>

                            <div class="form-group  mb-3">
                                <label for="horas_autonomo">Horas Autonomas</label>
                                <textarea name="horas_autonomo" id="horas_autonomo" rows="5" class="form-control"> </textarea>
                            </div>

                            <div class="form-group  mb-3">
                                <label for="horas_dirigido">Horas Dirigidas</label>
                                <textarea name="horas_dirigido" id="horas_dirigido" rows="5" class="form-control"> </textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mb3">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

