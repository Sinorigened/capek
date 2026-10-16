<footer class="site-footer">
  <div class="wrap footer-grid">
    <div>
      <strong style="color:#f5efe0;font-family:'Cormorant Garamond',serif;font-size:24px;font-weight:300">Čapek Seeds</strong>
      <p style="margin-top:12px;max-width:280px;font-weight:300">Asesoría concierge para cultivar cannabis de forma legal en México: del permiso COFEPRIS a la primera cosecha.</p>
    </div>
    <div>
      <h5>Servicios</h5>
      <a href="<?php echo capek_concierge(); ?>">Concierge 420</a>
      <a href="<?php echo capek_concierge('#paquetes'); ?>">Planes</a>
      <a href="<?php echo capek_concierge('#proceso'); ?>">El proceso</a>
    </div>
    <div>
      <h5>Casa</h5>
      <a href="https://www.instagram.com/capekseeds/" target="_blank" rel="noreferrer">Instagram</a>
      <a href="https://www.youtube.com/@capekseeds" target="_blank" rel="noreferrer">YouTube</a>
      <a href="mailto:hola@capek.fun">hola@capek.fun</a>
    </div>
    <div>
      <h5>Contacto</h5>
      <a href="https://wa.me/525544897353" target="_blank" rel="noreferrer">WhatsApp</a>
      <a href="<?php echo capek_concierge('#agendar'); ?>">Agendar consulta</a>
    </div>
  </div>
  <div class="wrap legal">
    <p>© <?php echo esc_html(date('Y')); ?> Čapek Seeds · México</p>
    <p>Servicio de orientación. El permiso lo emite COFEPRIS.</p>
  </div>
</footer>
<a class="wa" href="https://wa.me/525544897353" target="_blank" rel="noreferrer" aria-label="WhatsApp">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5A11 11 0 0 0 2.1 17.8L1 23l5.4-1.1A11 11 0 0 0 20.5 3.5zm-8.5 17a9.1 9.1 0 0 1-4.6-1.3l-.3-.2-3.2.7.7-3.1-.2-.3A9.1 9.1 0 1 1 12 20.5zm5-6.8c-.3-.1-1.6-.8-1.8-.9s-.4-.1-.6.1-.7.9-.8 1-.3.2-.6.1a7.4 7.4 0 0 1-2.2-1.4 8.2 8.2 0 0 1-1.5-1.9c-.2-.3 0-.4.1-.6l.4-.5.2-.3a.5.5 0 0 0 0-.5c0-.1-.6-1.4-.8-1.9s-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2 5.2 5.2 0 0 0 1.1 2.8 11.8 11.8 0 0 0 4.5 4 15 15 0 0 0 1.5.6 3.6 3.6 0 0 0 1.7.1 2.7 2.7 0 0 0 1.8-1.2 2.2 2.2 0 0 0 .2-1.2c-.1-.1-.3-.2-.6-.3z"/></svg>
</a>
<script>
document.querySelectorAll('.faq button').forEach(function(btn){
  btn.addEventListener('click', function(){
    var p = btn.nextElementSibling;
    var open = p.style.display === 'block';
    document.querySelectorAll('.faq p').forEach(function(x){ x.style.display = 'none'; });
    p.style.display = open ? 'none' : 'block';
  });
});
document.querySelectorAll('.faq p').forEach(function(p,i){ p.style.display = i === 0 ? 'block' : 'none'; });
</script>
<?php wp_footer(); ?>
</body>
</html>
