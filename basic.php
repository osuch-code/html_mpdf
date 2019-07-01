<?php
//==============================================================
$html = '
<body>
<h1>The Art &amp; Work of Cyprian Norwid</h1>
<p>Cyprian Kamil Norwid was a Polish writer (1821-1883).</p>

<h2>Poet, Writer, Artist</h2>
<p>His work, rediscovered today, provides an insight into the mind of an artist trying to make sense of the world in his unique way - through his religion, upbringing, language and history.</p>

<p>Having his work read by future generations was one of his hopes.</p>

<h2>Give Me That Sky-Blue Ribbon</h2>

<p><em>Translation - Jerzy Peterkiewicz</em></p>

<p>Give me that sky-blue ribbon, you’ll get it back</p>
<p>Entire, and undelayed…</p>
<p>Or else give me the shadow of your neck:</p>
<p>But no! I want no shade.</p>
<p></p>
<p>A shade will change when your hand beckons me,</p>
<p>For shadows do not sham.</p>
<p>No, I want nothing from you, pretty lady.</p>
<p>I take away my arm.</p>
<p></p>
<p>God usually rewards with lesser things,</p>
<p>Such as a drop of rain,</p>
<p>A fallen leaf that obstinately clings,</p>
<p>Stuck to the window-pane.</p>
<p></p>
<h3>Translation</h3>
<p>Translated from the Polish by Jerzy Peterkiewicz - CYPRIAN NORWID Poems – Letters – Drawings</p>
<p><em>(In collaboration with Christine Brooke-Rose and Burns Singer).</em></p>
<p>Used by permission from Carcanet Press</p>
<p></p>
<h2>DAJ MI WSTĄŻKĘ BŁĘKITNĄ</h2>
<p></p>
<p>Daj mi wstążkę błękitną — oddam ci ją</p>
<p>Bez opóźnienia...</p>
<p>Albo - daj mi cień twój z giętką twą szyją:</p>
<p>— Nie! nie chcę cienia.</p>
<p></p>
<p>Cień zmieni się, gdy ku mnie skiniesz ręką,</p>
<p>Bo on nie kłamie!</p>
<p>Nic od ciebie nie chcę, śliczna panienko,</p>
<p>Usuwam ramię...</p>
<p></p>
<p>Bywałem ja od Boga nagrodzonym,</p>
<p>Rzeczą mniej wielką:</p>
<p>Spadłym listkiem, do szyby przyklejonym,</p>
<p>Deszczu kropelką.</p>
';

//==============================================================

require_once __DIR__ . '../../../../../mpdf7/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
 

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;
//==============================================================

?>