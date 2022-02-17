<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ispis upita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <h1 class="font-xl ">Lista upita:</h1>



                   <div>
                      <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewEdukators({{$most_common_edukators}})" > <h1 class="p-4">Edukatori sa najviše unesenih ocjena</h1></button>
                  <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewEdukators({{$edu_profdrs}})"> <h1 class="p-4">Ispis edukatora koji imaju titulu red.prof.dr.</h1></button>
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewStudents({{$most_common_students}})" > <h1 class="p-4">Studenti sa najviše položenih ispita</h1></button>
                   <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewStudents({{$mostar_student_ocjenas}})" > <h1 class="p-4">Studenti iz Mostara koji su položili Ekonomiku ocjenom 10</h1></button>
                   <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewStudents({{$datum_student_ocjenas}})" > <h1 class="p-4">Ispis studenata koji su položili predmet Ekonomika u 2019.godini</h1></button>
                  <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewStudents({{$Vkl_21age_Elektronikas}})"> <h1 class="p-4">Ispis studenata iz Bihaća koji su položili predmet Elektronika a 2000.god su ili mlađi</h1></button>
                    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewStudents({{$Informatika_students}})"> <h1 class="p-4">Ispis studenata smjer Informatika</h1></button>
                    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewStudents({{$Redovni_students}})" > <h1 class="p-4">Ispis redovnih studenata</h1></button>
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewStudents({{$Informatika_vanredni}})"> <h1 class="p-4">Ispis vanrednih studenata iz Bihaća smjer Informatika</h1></button>
                   <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewPredmets({{$most_common_predmets}})"> <h1 class="p-4">Predmeti sa najvećom prolaznosti</h1></button>
                   <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewStudents({{$Czn_ages}})" > <h1 class="p-4">Ispis studenata iz Cazina koji imaju broj indexa manji od 500</h1></button>
                   <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewStudents({{$Informatika_students}})"> <h1 class="p-4">Ispis studenata smjer Informatika</h1></button>
<button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="viewStudents({{$cazin_student_ocjenas}})"> <h1 class="p-4">Ispis studenata iz grada Cazina</h1></button>

                </div>


              <div id="odgovor"></div>
</x-app-layout>
<script>
function viewEdukators(obj) {

    const div = document.createElement('div');

    var x=document.getElementById('odgovor');

    if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
 }
 var message=`
 <div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">Informacije o edukatorima</h3>
  </div>

 </div>
 `;
 for(var i=0;i<obj.length;i++){
message+=`<div class="border-t border-gray-200">
    <dl>
    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Titula</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">`+obj[i].title+`</dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Ime</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">`+obj[i].name+`</dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Prezime</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">`+obj[i].lastName+`</dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Broj unešenih ocjena</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">`+obj[i].brojac+`</dd>
      </div>



    </dl>
  </div>
</br>
  `
 }
div.className = 'row';
x.innerHTML=message;
}

function viewStudents(obj) {

    var message="";
    const div = document.createElement('div');

    var x=document.getElementById('odgovor');

    if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
 }
if(obj.length==0){

 message="Nema studenata"
} else{



console.log(obj[0]);

message=`
 <div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">Informacije o studentima</h3>
  </div>

 </div>
 `;
 for(var i=0;i<obj.length;i++){
message+=`<div class="border-t border-gray-200">
    <dl>
    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Broj indexa</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">`+obj[i].index+`</dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Ime</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">`+obj[i].name+`</dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Prezime</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">`+obj[i].lastName+`</dd>
      </div>
      `;
      if(obj[i].brojac != null) {
       message += `<div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Brojac</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">`+obj[i].brojac+`</dd>
      </div>
      `}





      message +=`  </dl>
  </div>
</br>
  `
 }
div.className = 'row';
}
x.innerHTML=message;
}

function viewPredmets(obj) {

const div = document.createElement('div');

var x=document.getElementById('odgovor');

if (x.style.display === "none") {
x.style.display = "block";
} else {
x.style.display = "none";
}
var message=`
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
<div class="px-4 py-5 sm:px-6">
<h3 class="text-lg leading-6 font-medium text-gray-900">Informacije o edukatorima</h3>
</div>

</div>
`;
for(var i=0;i<obj.length;i++){
message+=`<div class="border-t border-gray-200">
<dl>

  <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
    <dt class="text-sm font-medium text-gray-500">Naziv</dt>
    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">`+obj[i].name+`</dd>
  </div>

  <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
    <dt class="text-sm font-medium text-gray-500">Broj unešenih ocjena</dt>
    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">`+obj[i].brojac+`</dd>
  </div>



</dl>
</div>
</br>
`
}
div.className = 'row';
x.innerHTML=message;
}
</script>

