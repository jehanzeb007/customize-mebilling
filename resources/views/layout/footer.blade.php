@php
    $footerText = str_replace('@{siteLogo}', asset('storage/' . $logoPath), $footerText);
    $footerText = str_replace('@{sitePhone}', $sitePhone, $footerText);
    $footerText = str_replace('@{siteEmail}', $siteEmail, $footerText);
    $footerText = str_replace('@{siteAddress}', $siteAddress, $footerText);
@endphp

<footer class="footer">
    <div class="copyright">
        <p>{!! $footerText ?? 'Default footer text' !!}</p>
    </div>
</footer>


