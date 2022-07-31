# smart-method-M3
# طريقة عمل الموقع
اولا نقوم بادخال قيمة للحساس عن طريق الرابط التالي:
<br/>
https://smartmethods-3.000webhostapp.com/getValue.php?sensor + "قيمة الحساس "
<br />

مثال :
<br />
https://smartmethods-3.000webhostapp.com/getValue.php?sensor=1001
<br />

(سنقوم بادخال القيم موقتا هكذا الى ان نقوم بربطه معا الحساس لاخذ القيم الصحيحه)
<br />
<br />
ثانيا يمكننا عرض القيم التي تم حفظها عن طريق الرابط التالي :
https://fadaaq99.github.io/Smart-Methods-Week4/
<br />
# شرح للمهمه كاملة
الجزء الاول من المهمه:
<br />
<br />
قمنا بسحب قيم الحساس عن طريق GET 
<br />
![image](https://user-images.githubusercontent.com/110176361/181617733-bbfd0453-8a1f-46e3-8b08-747810f14b46.png)
<br />
<br />
الجزء الثاني من المهمه:
<br />
<br />
بعد ذلك قمنا بانشاء قاعدة بيانات لتخزين قيم الحساس كما هو موضح في الصور التالية:
<br />
<br />
![image](https://user-images.githubusercontent.com/98231758/181791468-9b9fea43-6ce8-4d45-9f6a-4c316f15c321.png)
<br />
<br />
![image](https://user-images.githubusercontent.com/98231758/181791570-67a6a3df-971e-442f-af90-a99761e66160.png)
<br />
<br />
الجزء الثالث من المهمه:

تخزين قيم الحساس في قاعدة البيانات عن طريق الرابط التالي:
https://smartmethods-3.000webhostapp.com/getValue.php?sensor= + "قيمة الحساس "
<br />
<br />
مثال :
<br />
<br />
https://smartmethods-3.000webhostapp.com/getValue.php?sensor=1001
<br />
<br />

(سنقوم بادخال القيم موقتا هكذا الى ان نقوم بربطه معا الحساس لاخذ القيم الصحيحه)
<br />
<br />
هذا هو الكود الخاص بادخال البيانات الى قاعدة البيانات:
<br />
<br />
![image](https://user-images.githubusercontent.com/98231758/181793370-072ba10f-b110-413b-a2a2-e5d247e1a10f.png)
<br />
<br />
بعض القيم التي تم حظفها في قاعدة البيانات:
<br />
<br />
![image](https://user-images.githubusercontent.com/98231758/181791850-e0741022-82d7-46e6-abbb-98d6e449f4f0.png)
<br />
<br />
الجزء الاخير من المهمه:
<br />
<br />
عرض جميع البيانات المدخلة الى قاعدة البيانات في صفحة 
index.html
<br />
<br />
الكود الخاص بسحب البيانات من قاعدة البيانات وعرضها:
<br />
<br />
![image](https://user-images.githubusercontent.com/98231758/181793393-84749974-04d6-4e7d-bf49-3b186a2ba35b.png)
<br />
<br />
