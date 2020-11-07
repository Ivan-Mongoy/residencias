<li class="my-2 md:my-0">
    <a href="{{ route('dashboard') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
        <i class="fas fa-home fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Home</span>
    </a>
</li>

@if( !Auth::user()->perfil_completo )
<li class="my-2 md:my-0 ">
    <a href="{{ route('cursos_alumnos.index') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
        <i class="fas fa-chalkboard-teacher fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Mis Cursos</span>
    </a>
</li>
<li class="my-2 md:my-0 ">
    <a href="{{ route('cursos_alumnos.create') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
        <i class="far fa-clock fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Mi Horario</span>
    </a>
</li>
@endif

