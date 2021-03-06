@extends('Front.layoutFront')

@section('content')

<div>
    <a id="up" class="up" name="up"></a>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea linea">Guacamayo Rojo de Alas Verdes</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/guacamayoRojo.jpg') }}" alt="Guacamayo Rojo" title="Guacamayo Rojo">
        </div>

        <article>
          <h2 class="titulo linea linea">¿Quién es?</h2>

          <p>El Guacamayo rojo de alas verdes, o Guacamayo &quot;aliverde&quot;, posee un <strong>magnífico
              plumaje</strong> y forma parte de la gran familia de los denominados &quot;loros&quot;.</p>
          <p>Su nombre científico, &quot;Ara&quot;, responde al sonido que emite esta ave, típica de las <strong>selvas
              tropicales que van desde México hasta Brasil</strong>. El Guacamayo rojo reside en las proximidades de
            sitios donde hay agua, y está amenazado debido a la destrucción de su hábitat (el comercio ilegal amenaza su
            supervivencia).</p>
          <p>Son bastantes grandes y atraen la atención por su <strong>vívido y espectacular colorido</strong>, y su
            llamado estridente con el que se comunican durante el vuelo. Los ejemplares jóvenes se parecen a los adultos,
            pero tienen la cola más corta.</p>
        </article>

        <article>
          <h2 class="titulo linea linea">¿Cuáles son sus costumbres?</h2>

          <p>El Guacamayo rojo vive en pequeños grupos o bien en pareja, con la que construye sus nidos en época de celo.
            El lugar escogido son los <strong>huecos de los árboles</strong>, de difícil acceso para los predadores. Los
            huevos los incuba la hembra, si bien el cuidado de los polluelos corresponde a ambos sexos. Las crías se
            emancipan una vez que aprenden a volar.</p>
          <p>Su alimentación se basa en <strong>frutas variadas, semillas, nueces y bayas</strong>.</p>
        </article>

        <article>
          <h2 class="titulo linea linea">Sabías que…</h2>
          <p>Son <strong>aves dóciles y sociables</strong>, de ahí que se adapten fácilmente a la vida de los hogares
            (aunque, al igual que ocurre con otras aves de su especie, suelen centrar su cariño en una sola persona).</p>
        </article>
      </div>
      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">Red-and-green Macaw</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/guacamayoRojo.jpg') }}" alt="Red-and-green Macaw" title="Red-and-green Macaw">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>He red-and-green macaw or &#34;green-winged&#34; macaw has magnificent plumage and forms part of the large family
            called &#34;parrots&#34;. Its scientific name, &#34;Ara&#34;, refers to the sound made by this bird, which is characteristic
            of tropical rainforests which run from Mexico to Brazil. The red-and-green macaw lives near places where there
            is water, and is threatened due to the destruction of its habitat (illegal trade threatens its survival).</p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p>The red-and-green macaw lives in small flocks or in pairs, and it builds its nest with its mate in the
            breeding season. The place it chooses are small hollows in trees, which are difficult for predators to access.
            The females broods, though both sexes care for the chicks. The chicks fly the nest when they learn to fly. Its
            diet is based on various fruits, seeds, nuts and berries.</p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>They are docile and gregarious birds, hence they easily adapt to domestic life (although, as with other birds
            of this species, they are usually affectionate with only one person).</p>
        </article>
      </div>
    </section>
  </div>

@endsection