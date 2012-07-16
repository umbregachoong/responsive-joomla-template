<?php

defined('_JEXEC') or die;
  $app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>
<body>
<div id="outerwrapper">
  <div id="header">

<jdoc:include type="modules" name="top" />
 

    <jdoc:include type="modules" name="breadcrumbs" />
    This is the header
  </div>
  <div id="innerwrapper">
  <div id="leftsidebar">
 
<jdoc:include type="modules" name="left" />

Left side bar<br/>
Saepe et multum hoc mecum cogitavi, bonine an mali plus attulerit hominibus et civitatibus copia dicendi ac summum eloquentiae studium. Nam cum et nostrae rei publicae detrimenta considero et maximarum civitatum veteres animo calamitates colligo, non minimam video per disertissimos homines invectam partem incommodorum; cum autem res ab nostra memoria propter vetustatem remotas ex litterarum monumentis repetere instituo, multas urbes constitutas, plurima bella restincta, firmissimas societates, sanctissimas amicitias intellego cum animi ratione tum facilius eloquentia comparatas.
   
  </div>
  <div id="maincolumn">

<jdoc:include type="component" />

Main column<br/>
<br/>
Ac me quidem diu cogitantem ratio ipsa in hanc potissimum sententiam ducit, ut existimem sapientiam sine eloquentia parum prodesse civitatibus, eloquentiam vero sine sapientia nimium obesse plerumque, prodesse numquam. Quare si quis omissis rectissimis atque honestissimis studiis rationis et officii consumit omnem operam in exercitatione dicendi, is inutilis sibi, perniciosus patriae civis alitur; qui vero ita sese armat eloquentia, ut non oppugnare commoda patriae, sed pro his propugnare possit, is mihi vir et suis et publicis rationibus utilissimus atque amicissimus civis fore videtur.

<br/><br/>
Ac me quidem diu cogitantem ratio ipsa in hanc potissimum sententiam ducit, ut existimem sapientiam sine eloquentia parum prodesse civitatibus, eloquentiam vero sine sapientia nimium obesse plerumque, prodesse numquam. Quare si quis omissis rectissimis atque honestissimis studiis rationis et officii consumit omnem operam in exercitatione dicendi, is inutilis sibi, perniciosus patriae civis alitur; qui vero ita sese armat eloquentia, ut non oppugnare commoda patriae, sed pro his propugnare possit, is mihi vir et suis et publicis rationibus utilissimus atque amicissimus civis fore videtur.
Ac mihi quidem hoc nec tacita videtur nec inops dicendi sapientia perficere potuisse, ut homines a consuetudine subito converteret et ad diversas rationes vitae traduceret.

Age vero urbibus constitutis, ut fidem colere et iustitiam retinere discerent et aliis parere sua voluntate consuescerent ac non modo labores excipiendos communis commodi causa, sed etiam vitam amittendam existimarent, qui tandem fieri potuit, nisi homines ea, quae ratione invenissent, eloquentia persuadere potuissent? Profecto nemo nisi gravi ac suavi commotus oratione, cum viribus plurimum posset, ad ius voluisset sine vi descendere, ut inter quos posset excellere, cum iis se pateretur aequari et sua voluntate a iucundissima consuetudine recederet, quae praesertim iam naturae vim optineret propter vetustatem.

  </div>
  <div id="rightsidebar">
<jdoc:include type="modules" name="right" />
Right side bar<br/>

Ac primo quidem sic et nata et progressa longius eloquentia videtur et item postea maximis in rebus pacis et belli cum summis hominum utilitatibus esse versata; postquam vero commoditas quaedam, prava virtutis imitatrix, sine ratione officii dicendi copiam consecuta est, tum ingenio freta malitia pervertere urbes et vitas hominum labefactare assuevit.

Atque huius quoque exordium mali, quoniam principium boni diximus, explicemus. 
  </div>
  </div>
  <div id="footer">
<jdoc:include type="modules" name="footer" />
The footer
  </div>
</div>
</body>
</html>