@php $gtm = config('seo.tracking.gtm_id'); @endphp
@if($gtm)
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ $gtm }}"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@endif

<script>
(function(){
  function track(eventName, payload){
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push(Object.assign({event:eventName}, payload || {}));
  }
  function reportConversion(key){
    if(typeof gtagReportConversion==='function' && window.gadsConversions){
      gtagReportConversion(window.gadsConversions[key]);
    }
  }
  document.addEventListener('click', function(e){
    var tel = e.target.closest('a[href^="tel:"]');
    if(tel){ track('phone_click', {phone: tel.getAttribute('href').replace('tel:','')}); reportConversion('phone'); }
    var mail = e.target.closest('a[href^="mailto:"]');
    if(mail) track('email_click', {email: mail.getAttribute('href').replace('mailto:','')});
    var zalo = e.target.closest('a[href*="zalo"]');
    if(zalo){ track('zalo_click', {}); reportConversion('zalo'); }
    var msg = e.target.closest('a[href*="m.me"], a[href*="messenger"]');
    if(msg) track('messenger_click', {});
  }, {passive:true});

  document.addEventListener('submit', function(e){
    var form = e.target;
    if(form && form.tagName === 'FORM'){
      track('form_submit', {form_id: form.id || form.getAttribute('name') || 'unknown'});
    }
  }, {passive:true});
})();
</script>
