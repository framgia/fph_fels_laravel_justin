@extends('layouts.app')
@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 panel panel-default lesson">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="activities-header">{{ $category->title }}</h4>
                    <span id="categoryId" class="hidden">{{ $category->id }}</span>
                </div>
                <div class="col-md-2 col-md-offset-4">
                    <h4 class="activities-header"><span id="currentItem"></span> of <span id="totalItems">{{ $category->items()->count() }}</span></h4>
                </div>
            </div>
            <hr class="custom-hr">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            @for($index = 0, $item = $category->items->get($index); $item != null; $index++, $item = $category->items->get($index))
                <div class="row item item{{ $index+1 }}">
                    <div class="col-md-4 col-md-offset-1">
                        <h4 class="text-center">{{ $item->word }}</h4>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        @foreach($item->options as $option)
                            <button class="follow-button" onClick="inputAnswer('{{ $item->word }}', '{{ $option->word }}')">{{ $option->word }}</button>
                        @endforeach
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
<script>
document.getElementById("currentItem").innerHTML = "0";
var itemCount = document.getElementById("totalItems").innerHTML;

var currentItem = 1;
var requestObject = {};
requestObject['categoryId'] = parseInt(document.getElementById("categoryId").innerHTML);
displayItems();

function displayItems() {
    var itemString = "item"+currentItem;
    document.getElementById("currentItem").innerHTML = currentItem;
    [].forEach.call(document.querySelectorAll('.item'), function (el) {
        el.style.display = (el.classList.contains(itemString)) ? 'block' : 'none';
    });
}

function inputAnswer(itemWord, optionWord) {
    requestObject[itemWord] = optionWord;
    currentItem++;
    if(currentItem > itemCount) {
        submitRequest();
    }else {
        displayItems();
    }
}

function submitRequest() {
    var url = "create";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $.ajax({
        type: "POST",
        url: url,
        data: requestObject,
        success: function() {
            redirectResults();
        }
    });
}

function redirectResults() {
    window.location = "{{ URL::to('/results') }}" + "/" + "{{ Auth::user()->id }}" + "/" + requestObject['categoryId'] + "?";
}

</script>
@endsection