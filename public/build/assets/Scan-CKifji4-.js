import{H as _}from"./html5-qrcode-scanner-DOyutdHj.js";import{_ as h}from"./SnackLayout-EAcVuRe1.js";import{d as p,e as f,o as n,c as k,w as o,b,a as t,t as a,f as v,g as S,u as x,i as w,h as g}from"./app-BZ3UyCgy.js";const B=t("div",{class:"w-full",id:"reader"},null,-1),N={key:0,id:"ticket-info"},V={class:"w-full text-left mx-2"},C=t("th",null,"Nama",-1),Q=t("th",null,"Email",-1),T=t("th",null,"No. Telepon",-1),j=t("th",null,"Asal Sekolah",-1),M={__name:"Scan",props:{tickets:Object},setup(s){const c=s,e=p();function r(l,d){let u=c.tickets.find(m=>m.code===l);e.value=u}f(()=>{new _("reader",{fps:10,qrbox:250}).render(r)});function i(){return alert("Berhasil klaim tiket!")}return(l,d)=>(n(),k(h,null,{default:o(()=>[B,e.value?(n(),b("div",N,[t("table",V,[t("tr",null,[C,t("td",null,a(e.value.participant.name),1)]),t("tr",null,[Q,t("td",null,a(e.value.participant.email),1)]),t("tr",null,[T,t("td",null,a(e.value.participant.phone),1)]),t("tr",null,[j,t("td",null,a(e.value.participant.school),1)])]),v(x(w),{class:"w-full bg-green-600 hover:bg-green-500 font-semibold text-white p-2 rounded-md mt-2",onClick:i,href:"/snack/submit",data:{ticket_id:e.value.id},method:"post",as:"button"},{default:o(()=>[S(" SUBMIT ")]),_:1},8,["data"])])):g("",!0)]),_:1}))}};export{M as default};
