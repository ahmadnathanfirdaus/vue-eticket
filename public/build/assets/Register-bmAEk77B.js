import{T as r,o as d,b as m,a as e,k as u,l,v as c,u as o,m as n,n as g}from"./app-B6UeK9qC.js";import{_ as p,a as f,b as x}from"./esport-CjCS0rmu.js";const h={class:"flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8"},_=g('<div class="sm:mx-auto sm:w-full sm:max-w-sm text-center"><img src="'+p+'" alt="ITTS" class="h-20 inline"><img src="'+f+'" alt="BEM ITTS" class="h-20 inline"><img src="'+x+'" alt="ESPORT ITTS" class="h-20 inline"><h2 class="mt-4 text-2xl font-bold leading-9 tracking-tight text-gray-900"> Registrasi Ulang </h2></div>',1),y={class:"mt-4 sm:mx-auto sm:w-full sm:max-w-sm"},b=e("label",{for:"status",class:"block text-sm font-medium leading-6 text-gray-900"},"Player/Supporter",-1),v={class:"mt-2"},w=e("option",{disabled:"",selected:""},"Player/Supporter",-1),k=e("option",{value:"player"},"Player",-1),S=e("option",{value:"supporter"},"Supporter",-1),T=[w,k,S],V=e("label",{for:"name",class:"block text-sm font-medium leading-6 text-gray-900"},"Nama",-1),U={class:"mt-2"},P=e("label",{for:"school",class:"block text-sm font-medium leading-6 text-gray-900"},"Asal Sekolah",-1),q={class:"mt-2"},B=e("label",{for:"email",class:"block text-sm font-medium leading-6 text-gray-900"},"Email",-1),E={class:"mt-2"},M=e("label",{for:"phone",class:"block text-sm font-medium leading-6 text-gray-900"},"No. Telepon",-1),N={class:"mt-2"},I=e("div",null,[e("button",{type:"submit",class:"flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"}," Daftar ")],-1),A={__name:"Register",setup(R){const t=r({name:"",school:"",email:"",phone:"",status:""});function a(){t.post("/register")}return(j,s)=>(d(),m("div",h,[_,e("div",y,[e("form",{class:"space-y-4",action:"/register",method:"POST",onSubmit:u(a,["prevent"])},[e("div",null,[b,e("div",v,[l(e("select",{name:"status",id:"status","onUpdate:modelValue":s[0]||(s[0]=i=>o(t).status=i),class:"block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"},T,512),[[c,o(t).status]])])]),e("div",null,[V,e("div",U,[l(e("input",{id:"name",name:"name",type:"text",autocomplete:"name","onUpdate:modelValue":s[1]||(s[1]=i=>o(t).name=i),class:"block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6",required:""},null,512),[[n,o(t).name]])])]),e("div",null,[P,e("div",q,[l(e("input",{id:"school",name:"school",type:"text",autocomplete:"school","onUpdate:modelValue":s[2]||(s[2]=i=>o(t).school=i),class:"block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6",required:""},null,512),[[n,o(t).school]])])]),e("div",null,[B,e("div",E,[l(e("input",{id:"email",name:"email",type:"email",autocomplete:"email","onUpdate:modelValue":s[3]||(s[3]=i=>o(t).email=i),class:"block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6",required:""},null,512),[[n,o(t).email]])])]),e("div",null,[M,e("div",N,[l(e("input",{id:"phone",name:"phone",type:"text",autocomplete:"phone","onUpdate:modelValue":s[4]||(s[4]=i=>o(t).phone=i),class:"block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6",required:""},null,512),[[n,o(t).phone]])])]),I],32)])]))}};export{A as default};
