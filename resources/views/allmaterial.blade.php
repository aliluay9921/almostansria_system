@extends('layouts.userlayout')

@section('usercontent')
    <div class="drop">

        @foreach ($stageInfo as $branch)

            <a href="{{ route('getmatiral', ['stage_id' => $stage_id, 'branch_id' => $branch->id]) }}">
                <p>{{ $branch->name }}</p>
            </a>

        @endforeach
    </div>
    <div class="containerMAterialALL">
        @foreach ($get as $item)
            <div class="card1">
                <a href="{{ route('get.lecture', $item->id) }}">
                    <h3 class="materialH3">{{ $item->title }}</h3>
                    <p class="small"><b>{{ $item->desc }}</b></p>
                    <p class="countMAt"><b>عدد المحاضرات </b><span>{{ $item->lecturs->count() }}</span></p>
                    <p class="doctorName">
                        @if (empty($item->users->name))
                            <b>تم حذف التدريسي</b>
                        @else
                            <b>د. {{ $item->users->name }}</b>
                        @endif
                    </p>


                    <div class="go-corner">
                        <div class=" go-arrow">
                            →
                        </div>
                    </div>

                </a>
                @if (empty($item->refrence))
                    <div class="refrence">
                        <span class="btn btn-secondary">لم يتم تحميل المصادر </span>
                    </div>
                @else
                    <div class="refrence">
                        <a href="{{ $item->refrence->link }}" class="btn btn-info">مصادر</a>
                    </div>
                @endif
            </div>

        @endforeach
    </div>

    {{-- <div class="containerMAterialALL">
        <a class="card1" href="#">
            <h3 class="materialH3">{{ $item->title }}</h3>
            <p class="small">{{ $item->desc }}</p>
            <p class="countMAt"><b>عدد المحاضرات </b><span>{{ $item->lecturs->count() }}</span></p>
            <p class="doctorName"><b>د. {{ $item->users->name }}</b></p>
            <div class="go-corner" href="{{ route('get.lecture', $item->id) }}">
                <div class=" go-arrow">
                    →
                </div>
            </div>
        </a>
    </div> --}}

@endsection
