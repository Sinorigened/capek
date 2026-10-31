<?php get_header(); ?>
<section class="hero-full">
  <img class="bg" src="<?php echo capek_img('09conciergeherosalaoscura.jpg'); ?>" alt="">
  <div class="shade"></div>
  <div class="wrap" style="position:relative;z-index:1">
    <div class="inner">
      <div class="label">Concierge 420</div>
      <h1>Acompañamiento <em class="gold">total.</em></h1>
      <p class="lede">Del permiso ante COFEPRIS al cuidado de la planta. Tres planes, una consulta inicial sin costo.</p>
      <a class="btn btn-gold" href="#agendar">Agendar consulta</a>
    </div>
    <div class="bar">
      <div><strong>Remoto</strong><span>Todo el país</span></div>
      <div><strong>Confidencial</strong><span>Sin terceros</span></div>
      <div><strong>30 min</strong><span>Primera llamada</span></div>
      <div><strong>3 planes</strong><span>Según tu etapa</span></div>
    </div>
  </div>
</section>
<section class="macro">
  <img src="<?php echo capek_img('12conciergemacroflorpremium.jpg'); ?>" alt="">
  <div class="shade"></div>
  <div class="wrap inner">
    <div class="label">Lo que cuidamos</div>
    <h2>Una flor bien llevada empieza en el <em class="gold">papel.</em></h2>
    <p class="lede">El permiso no sustituye la técnica, y la técnica sin permiso no da tranquilidad.</p>
    <div class="metrics"><div><b>3</b><span>planes claros</span></div><div><b>24h</b><span>para confirmar cita</span></div></div>
  </div>
</section>
<section class="band cream" id="paquetes">
  <div class="wrap">
    <div class="label">Planes</div>
    <h2>Semilla, Brote <em class="gold">y Cosecha.</em></h2>
    <p class="muted">Precios de orientación en pesos mexicanos, pago único.</p>
    <div class="cards3" style="margin-top:28px;background:transparent;gap:16px">
      <article class="card plan">
        <h3>Semilla</h3><div class="price">$2,500</div><small>pago único · MXN</small>
        <ul><li>Consulta de diagnóstico de 60 min</li><li>Checklist de documentos COFEPRIS</li><li>Orientación del trámite</li><li>Guía del proceso y manual básico</li><li>1 sesión de seguimiento post-permiso</li></ul>
        <a class="btn btn-solid" href="#agendar">Elegir Semilla</a>
      </article>
      <article class="card plan featured">
        <div class="ribbon">Más elegido</div>
        <h3>Brote</h3><div class="price">$5,800</div><small>pago único · MXN</small>
        <ul><li>Todo lo de Semilla</li><li>Gestión activa del trámite</li><li>Respuesta a observaciones sin costo extra</li><li>Plan de cultivo y variedad</li><li>4 sesiones de seguimiento</li><li>Comunidad por 12 meses</li></ul>
        <a class="btn btn-gold" href="#agendar">Elegir Brote</a>
      </article>
      <article class="card plan">
        <h3>Cosecha</h3><div class="price">$9,500</div><small>pago único · MXN</small>
        <ul><li>Todo lo de Brote</li><li>Acompañamiento del ciclo completo</li><li>WhatsApp directo durante el ciclo</li><li>Revisión del espacio por videollamada</li><li>Comunidad por 24 meses</li><li>Orientación para renovar el permiso</li></ul>
        <a class="btn btn-solid" href="#agendar">Elegir Cosecha</a>
      </article>
    </div>
  </div> 
</section>
<section class="band" id="proceso">
  <div class="wrap split">
    <div>
      <div class="label">Cómo se vive</div>
      <h2>De la llamada a la <em class="gold">primera flor.</em></h2>
      <div class="frame" style="height:280px;margin-top:20px"><img src="<?php echo capek_img('18cultivomedida.jpg'); ?>" alt=""></div>
    </div>
    <div class="tl">
      <article><time>Día 1</time><div><h3 style="font-size:22px">Consulta gratuita</h3><p class="muted">Treinta minutos para ver si Čapek es la vía correcta.</p></div></article>
      <article><time>Semana 1</time><div><h3 style="font-size:22px">Diagnóstico</h3><p class="muted">Espacio, objetivo y calendario de trabajo.</p></div></article>
      <article><time>Semanas 2–4</time><div><h3 style="font-size:22px">Expediente</h3><p class="muted">Documentos completos y explicados.</p></div></article>
      <article><time>Semanas 4–10</time><div><h3 style="font-size:22px">Trámite</h3><p class="muted">Seguimiento y respuesta a observaciones.</p></div></article>
      <article><time>Con el permiso</time><div><h3 style="font-size:22px">Siembra</h3><p class="muted">El plan de cultivo se pone en marcha.</p></div></article>
    </div>
  </div>
</section>
<section class="band" id="agendar">
  <div class="wrap split">
    <div>
      <div class="label">Empieza hoy</div>
      <h2>La consulta inicial es <em class="gold">gratuita.</em></h2>
      <p class="muted">Al enviar se abre WhatsApp con el resumen. No se guarda el formulario en WordPress.</p>
    </div>
    <form class="form" onsubmit="capekSend(event)">
      <h3 style="color:#f5efe0;font-size:32px">Agenda tu consulta</h3>
      <label for="nombre">Nombre</label>
      <input id="nombre" name="nombre" required>
      <label for="telefono">WhatsApp</label>
      <input id="telefono" name="telefono" required placeholder="+52">
      <label for="estado">Estado</label>
      <select id="estado" name="estado">
        <option>Ciudad de México</option><option>Jalisco</option><option>Nuevo León</option><option>Oaxaca</option><option>Puebla</option><option>Otro</option>
      </select>
      <label for="plan">Plan</label>
      <select id="plan" name="plan">
        <option>Semilla ($2,500)</option><option>Brote ($5,800)</option><option>Cosecha ($9,500)</option><option>Aún no lo sé</option>
      </select>
      <label for="mensaje">Tu situación</label>
      <textarea id="mensaje" name="mensaje"></textarea>
      <button class="btn btn-gold" style="width:100%;margin-top:16px" type="submit">Enviar por WhatsApp</button>
      <p class="note" id="capek-note"></p>
    </form>
  </div>
</section>
<script>
function capekSend(e){
  e.preventDefault();
  var f = e.target;
  var text = 'Hola Čapek, soy ' + f.nombre.value + ' (' + f.estado.value + '). Me interesa ' + f.plan.value + '. ' + f.mensaje.value;
  document.getElementById('capek-note').textContent = 'Se abre WhatsApp para confirmar la consulta.';
  window.open('https://wa.me/525544897353?text=' + encodeURIComponent(text), '_blank', 'noopener');
}
</script>
<?php get_footer(); ?>
