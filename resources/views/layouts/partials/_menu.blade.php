<div id="sidebar-menu" class="sidebar-menu">
    <ul>
        <li class="active">
            <a href="{{ route('home') }}"><span>Главная</span></a>
        </li>
        <li>
            <a href="{{ route('teachers.index') }}"><span>Преподаватели</span></a>
        </li>
        <li>
            <a href="{{ route('students.index') }}" onclick="return false"><span>Ученики (В разработке)</span></a>
        </li>
        <li>
            <a href="{{ route('parents.index') }}" onclick="return false"><span>Родители (В разработке)</span></a>
        </li>
        <li>
            <a href="{{ route('subjects.index') }}"><span>Предметы</span></a>
        </li>

        <li>
            <a href="{{ route('blogs.index') }}"><span>Блог</span></a>
        </li>

        <li>
            <a href="{{ route('faqs.index') }}"><span>Вопросы-Ответы</span></a>
        </li>

        <li>
            <a href="{{ route('feedbacks.index') }}"><span>Обратная связь</span></a>
        </li>

        <li>
            <a class="dropdown-item" href="#" onclick="$('#logout').submit()">Выход</a>
            <form action="{{ route('logout') }}" method="post" class="d-none" id="logout">
                @csrf
            </form>
        </li>
        {{-- <li class="submenu">--}}
            {{-- <a href="#"><span> Reports</span> <span
                    class="menu-arrow"></span></a>--}}
            {{-- <ul style="display: none;">--}}
                {{-- <li><a href="invoice-report.html">Invoice Reports</a></li>
                --}}
                {{-- </ul>--}}
            {{-- </li>--}}
    </ul>
</div>
