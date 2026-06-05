@php
    $gtm = config('seo.tracking.gtm_id');
    $gaw = config('seo.tracking.gads_id');
    $ga4 = config('seo.tracking.ga4_id');
    $gawContact = config('seo.tracking.gads_conversion_contact');
    $gawPhone = config('seo.tracking.gads_conversion_phone');
    $gawZalo = config('seo.tracking.gads_conversion_zalo');
@endphp

@if($gtm)
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','{{ $gtm }}');</script>
<!-- End Google Tag Manager -->
@endif

@if($ga4 || $gaw)
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $ga4 ?: $gaw }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  @if($ga4) gtag('config', '{{ $ga4 }}'); @endif
  @if($gaw) gtag('config', '{{ $gaw }}'); @endif
</script>
@endif

@if($gaw && ($gawContact || $gawPhone || $gawZalo))
<!-- Google Ads conversions -->
<script>
  // Nhãn các hành động chuyển đổi Google Ads
  window.gadsConversions = {
    contact: '{{ $gawContact }}',
    phone: '{{ $gawPhone }}',
    zalo: '{{ $gawZalo }}'
  };
  // Bắn một lượt chuyển đổi theo nhãn (send_to). callback chạy sau khi gửi xong.
  function gtagReportConversion(sendTo, callback){
    var cb = (typeof callback === 'function') ? callback : function(){};
    if (!sendTo || typeof gtag !== 'function') { cb(); return false; }
    gtag('event', 'conversion', {
      'send_to': sendTo,
      'event_callback': cb
    });
    return false;
  }
  // Gọi khi khách gửi form liên hệ thành công.
  function gtagReportContact(callback){
    return gtagReportConversion(window.gadsConversions.contact, callback);
  }
</script>
@endif
