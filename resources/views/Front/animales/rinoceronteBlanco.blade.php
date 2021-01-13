@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Rinoceronte Blanco</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/rinoceronteBlanco.jpg') }}" alt="Rinoceronte Blanco" title="Rinoceronte Blanco">
        </div>

        <article>
          <h2 class="titulo linea">¿Quién es?</h2>

          <p>El Rinoceronte blanco es el <strong>segundo mamífero terrestre más grande del planeta</strong>. A pesar de su
            impresionante tamaño, es un animal <strong></strong>muy ágil, capaz de galopar a gran velocidad y girar en
            plena carrera.</p>
          <p>Es <strong>solitario</strong> y posee unos cuernos que constituyen su arma más temible. Cornamenta que es, no
            obstante, el motivo de que su caza sea tan codiciada: creencias populares le atribuyen propiedades
            afrodisíacas. Afortunadamente, sin embargo, es una especie protegida (en la actualidad está prohibida su
            caza).</p>
          <p>Posee <strong>buen oído y olfato</strong>, pero mala vista. Ninguno de los rinocerontes africanos es en
            realidad blanco, sino de color gris. En el caso del Rinoceronte blanco, el nombre procede de la palabra &quot;wyt&quot;
            (&quot;blanco&quot;, en afrikaans, que significa &quot;ancho&quot; y se refiere al tamaño de sus labios y boca). Machos y hembras
            son prácticamente iguales, si bien ellas tienen cuernos más largos y delgados.</p>
          <p>Se distribuyen por el este y el sur del continente africano.</p>
        </article>

        <article>
          <h2 class="titulo linea">¿Cuáles son sus costumbres?</h2>

          <p>Una de sus grandes aficiones es darse <strong>baños en el lodo</strong>. Esto le sirve para protegerse de los
            insectos, así como para regular su temperatura. Por eso permite a los pájaros posarse sobre su lomo, para que
            éstos limpien la dura piel que le cubre, carente de pelaje, de parásitos.</p>
          <p>Suele habitar en bosques abiertos y secos, con buenos pastizales para poder alimentarse (de bulbos, hierba y
            hojas: la base de su dieta).</p>
          <p>De <strong>costumbres nocturnas</strong>, es el más sociable de los rinocerontes y se agrupa en parejas de
            madres-cría o en <strong>manadas de hasta siete ejemplares jóvenes</strong>.</p>
          <p>El embarazo dura 18 meses, y la lactancia un año (aunque el bebé rinoceronte come hierba desde las primeras
            semanas de vida). El celo de la hembra vuelve a los dos años: es entonces cuando la cría se independiza,
            forzosamente, puesto que la madre tiene que volver a aparearse.</p>
        </article>

        <article>
          <h2 class="titulo linea">Sabías que…</h2>
          <p>El <strong>tercer bebé de Rinoceronte blanco nacido por inseminación artificial, en todo el mundo, fue
              alumbrado en el Zoo Aquarium de Madrid</strong>.</p>
        </article>
      </div>
      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">White Rhino</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/rinoceronteBlanco.jpg') }}" alt="White Rhino" title="White Rhino">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>The White rhinos is the second largest terrestrial mammal on the planet. Despite its amazing size, it's a
            very fast animal, capable of galloping at high speed and turning while running.</p>
          <p>A solitary animal, it has horns which are its most terrible weapon. A horn which is, nevertheless, the reason
            why it is so desirable for hunters: popular beliefs attribute to it aphrodisiac properties. Fortunately,
            however, it's a protected species (hunting it is currently banned).</p>
          <p>It has good hearing and a good sense of small but poor eyesight. No African rhinos is really white, but
            rather grey. In the case of the white rhinos, the name derives from the word &quot;wyt&quot; (&quot;white&quot; in Afrikaans,
            which means &quot;wide&quot; and refers to the size of its lips and mouth). Males and females are practically the same,
            though the latter have longer and narrower horns.</p>
          <p>Their range is the south and east of the African continent.</p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p>One of its great pleasures is to have a mud bath. This acts to protect it from insect, as well as to regulate
            its temperature. That's why it allows bird to ride on its back, so they may clear its tough hide, which lacks
            fur, of parasites.</p>
          <p>It usually lives in dry, open forests, with good grazing land to be able to deed (on bulbs, grass and leaves,
            on which its diet is based).</p>
          <p>A nocturnal animal, it is the most sociable of the rhinos and gathers in mother-calf pairs or in herds
            of up to seven juveniles.</p>
          <p>Pregnancy lasts 18 months and suckling a year (though the calf starts eating grass a few weeks after birth).
            The female re-enters heat two years later: that is when the calf is forced to leave, since the mother has to
            breed again.</p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>The third white rhinos calf born through artificial insemination, in the world, was born at Madrid Zoo
            Aquarium.</p>
        </article>
      </div>
    </section>
  </div>

@endsection