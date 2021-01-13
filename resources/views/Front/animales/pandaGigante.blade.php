@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Pandas Gigantes</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/pandaGigante.jpg') }}" alt="Pandas Gigantes" title="Pandas Gigantes">
        </div>

        <article>
          <h2 class="titulo linea">¿Quién es?</h2>

          <p>Los Pandas Gigantes son animales fascinantes. Comedor de <strong>bambú</strong> (como indica el significado
            de su nombre en nepalí), no era más que un vagabundo solitario de las montañas chinas hasta que en 1869 fue
            dado a conocer en Occidente por el naturalista y misionero Armand David. Los Pandas gigantes constituyen
            <strong>todo un símbolo</strong> para quienes están convencidos de la necesidad de proteger la naturaleza y la
            biodiversidad.</p>
          <p>Son animales <strong>tranquilos</strong>, <strong>expertos trepadores de árboles</strong>. Las hembras son
            más livianas que los machos, si bien no existen diferencias entre ellos. Su pelaje es duro, largo y denso; en
            ocasiones, el negro tiene un matiz amarronado, y el blanco se oscurece o se vuelve más rojizo y marrón. Posee
            <strong>pupilas verticales</strong>, al igual que los gatos. Esta especie ha desarrollado un <strong>sexto
              dedo (pseudo-pulgar)</strong> que no es más que una prolongación de un hueso de la muñeca que le sirve para
            arrancar, agarrar y llevarse a la boca el bambú.</p>
        </article>

        <article>
          <h2 class="titulo linea">¿Cuáles son sus costumbres?</h2>

          <p>Los <strong>bosques templados en China</strong> son los que han ofrecido a los Pandas gigantes,
            tradicionalmente, abrigo y alimento. Cada ejemplar suele ocupar un territorio que abarca los 4 y 6,5
            kilómetros, mientras se mueve despreocupada y lentamente, economizando energías. El amanecer y el crepúsculo
            son las horas en las que el oso panda se muestra más activo, aunque no siempre.</p>
          <p>Machos y hembras frecuentan zonas prácticamente idénticas, y se comunican con una serie de sonidos.
            Especialmente los machos, que realizan llamadas y gemidos durante la época de celo (específicos y bastante
            ruidosos). Las crías nacen a los 135 días de gestación, ciegas y rosadas. Su dieta está formada por bambú
            principalmente; también comen <strong>insectos</strong>, <strong>huevos</strong>, <strong>frutos</strong> y
            <strong>pequeños mamíferos</strong>.</p>
        </article>

        <article>
          <h2 class="titulo linea">Sabías que…</h2>
          <p>La supervivencia del oso panda está aún comprometida: solamente quedan entre 1.000 y 2.000 animales en su
            hábitat natural, en las provincias de <strong>Gansu</strong>, <strong>Shaanxi</strong> y <strong>Sichuan
              (China)</strong>.</p>
        </article>
      </div>
      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">Giant pandas</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/pandaGigante.jpg') }}" alt="Giant pandas" title="Giant pandas">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>Giant pandas are fascinating animals. It eats <strong>bamboo</strong> (as indicated by its name in Nepali),
            it was no more than a solitary wanderer of the mountains of China until in 1869 it was made known in the West
            by the naturalist and missionary Armand David. Giant pandas are <strong>a symbol</strong> for those who are
            convinced of the need to protect nature and biodiversity.</p>
          <p>They are <strong></strong>peaceful animals and expert tree climbers. The females are lighter than the males,
            though there are no differences between them. Their fur is rough, long and dense; sometimes, the black has a
            brownish tinge, and the white darkens or becomes more reddish and brown. It has <strong>vertical
              pupils</strong>, like cats. This species has developed a <strong>sixth finger (pseudo-thumb)</strong> which
            is simply a prolongation of the wrist bone that allows it to uproot, grasp and carry the bamboo to its mouth.</p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p><strong>Temperate forests in China</strong> have traditionally provided giant pandas with shelter and food.
            Each individual usually occupies a territory of between 4 and 6.5 km, while it moves casually and slowly,
            saving energy. Dawn and dusk are the times when the bear is most active, though not always.</p>
          <p>Males and females are found in practically identical areas and communicate with one another with a series of
            sounds. Especially the males, who make call and groaning sounds during the breeding season (which are specific
            and rather noisy). The cubs are born after a gestation of 135 days and are blind and pink. Its diet consists
            mainly of bamboo; they also eat <strong>insects</strong>, <strong>eggs</strong>, <strong>fruit</strong> and
            <strong>small mammals</strong>.</p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>The survival of the panda bear is still in doubt: there are only between 1,000 and 2,000 animals in their
            natural habitat, in the provinces of <strong>Gansu</strong>, <strong>Shaanxi</strong> and <strong>Sichuan
              (China)</strong>.</p>
        </article>
      </div>
    </section>
  </div>

@endsection