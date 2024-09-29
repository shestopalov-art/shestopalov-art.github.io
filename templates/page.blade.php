@extends('layout')

@section('body')
<div class="container-xxl px-4 py-5">
    <div class="row align-items-center g-0 py-lg-5">
        <div class="col-lg-6 col-12 z-1">
            <h1 class="display-1 text-body-emphasis text-uppercase p-xxl-5">
                <span class="d-block">Сергей</span>
                <span class="d-block">Константинович</span>
                <span class="d-block">Шестопалов</span>
            </h1>
        </div>
        <div class="col-12 col-sm-8 col-lg-6" style="background: #252628">
            <img src="/ui/portrait.png" class="d-block mx-lg-auto w-100 portrait" alt="Сергей Константинович Шестопалов">
        </div>
    </div>
</div>


<div class="container-xxl px-4 py-5">
    <div class="row align-items-center g-0 py-lg-5">
        <div class="col-12 col-sm-9 col-lg-0">
            <p class="h2">
                Сергей Шестопалов писал цветы каждый день. Такая работа была для него физиологической потребностью.
                Как дышать воздухом. Рабиндранату Тагору принадлежат слова: «Конечно, я мог бы обойтись и без цветов, но они
                помогают мне сохранить
                уважение к самому себе, ибо доказывают, что я не скован по рукам и ногам будничными заботами. Они -
                свидетельство моей
                свободы». Может быть, Сергей Константинович каждый новый день начинал новый натюрморт для того же -  в
                докзательство своей
                свободы.
            </p>
        </div>
    </div>
</div>

<div class="overflow-hidden w-100">
    <div class="slider">
        <div class="d-flex align-items-center g-4 py-5 slide-track">
            @foreach($images->take(6) as $image)
                <div class="slide">
                    <img src="{{ $image }}" class="img-fluid p-5" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container-xxl px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-0 py-5">
        <div class="col-12 col-sm-9 col-lg-0 d-flex flex-column gap-5">
            <p class="h2">
                Когдя я стою среди серого дня, в ожидании маршрутки, дыша городским смогом, то пытаюсь воскресить в памяти шестопаловские цветы как волшебное средство от городской суеты и обыденности. По словам самого Шестопалова, он всю жизнь пытался написать тот самый сказочный Аленький цветочек. Наивно? Простодушно? Удивительно для современного художника? Да нет. Наверное, просто – искренне…
            </p>
            <p class="h2">
                Цветы в работах Шестопалова образы не случайные, а хорошо продуманные и прочувствованные художником. Цветочные композиции в его листах полны пластических противоречий и колористических контрастов. Судя по очертаниям, они неподвижны, но быстрые линии и спорящие, вспыхивающие пятна цвета говорят о возможности изящного движения, озвучивают «безмолвную жизнь» «метрвой природы» натюрморта. Если ощущаешь цветы как персонажи живых историй, как иначе их напишешь?
            </p>
            <p class="h2">
                Цветочным натюрмортам Шестопалова присущи открытая декоративность, светоносность и особое чувство одновременно пластической эфемерности и «вещественности» цветов.
            </p>
            <p class="h2">
                История мировой живописи и графики знает множество примеров верности одной теме, особенно это свойственно натюрморту (вспомним многочисленных китайских, корейских и японских мастеров, посвятивших свое творчество изображению исключительно одного вида  - цветов сливы, вишни, лилии). Работы Шестопалова посвящены гораздо более разнообразному миру – миру цветов в целом.
            </p>
        </div>
    </div>
</div>


<div class="overflow-hidden w-100">
    <div class="slider">
        <div class="d-flex align-items-center g-4 py-5 slide-track">
            @foreach($images->skip(6)->take(6) as $image)
                <div class="slide">
                    <img src="{{ $image }}" class="img-fluid p-5" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container-xxl px-4 py-5">
    <div class="row align-items-center g-0 py-lg-5">
        <div class="col-12 col-sm-9 col-lg-0  d-flex flex-column gap-5">
            <p class="h2">
                 Акварели художника очень орагничны, в них нет стремления поразить зрителя, как нет и бравирования технической
                наработанностью приемов. Это, наверное, и объясняет особую притягательность его натюрмортов. Они – часть того
                повседневного мира, в котором радость способны дарить соврешенно обычные вещи – ясное утро, теплый весенний
                ветер, запах опавшей листвы.
            </p>

            <p class="h2">
                Камерную интонацию акварелей мастера нужно уметь расслышать….
            </p>


            <div class="text-end fw-bold h1">
                - Светлана Никова
            </div>

        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row align-items-center g-3 py-5">
        @foreach($images as $image)
            <div class="col-12 col-md-6 col-lg-4">
                <img src="{{ $image }}" class="w-100 h-100" alt="" loading="lazy">
            </div>
        @endforeach
    </div>
</div>
@endsection
