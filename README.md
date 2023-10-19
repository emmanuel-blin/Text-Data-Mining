# Text-Data-Mining
Wordpress Plugin for TDM Rep protocol W3C Opt-Out

This specification defines a simple and practical Web protocol, capable of expressing the reservation of rights relative to text & data mining (TDM) applied to lawfully accessible Web content, and to ease the discovery of TDM licensing policies associated with such content.

This initiative is a technical answer to the constraints set by the Article 4 of the new [European Directive on copyright and related rights in the Digital Single Market.](https://eur-lex.europa.eu/legal-content/EN/TXT/HTML/?uri=CELEX:32019L0790&from=EN)

For more info, read the doc : [w3c tdmrep](https://www.w3.org/2022/tdmrep/)

Add a policy.json file to your server 
```
{
   "@context": [
      "http://www.w3.org/ns/odrl.jsonld",
      {"tdm": "http://www.w3.org/ns.tdmrep#"}
   ],

   "@type": "Offer",
   "profile": "http://www.w3.org/ns/tdmrep",
   "uid": "PATH-TO/policy.json/",
   "asigner": {
      "uid": "YOUR-URL",
      "vcard:fn": "NAME ",
      "vcard:nickname": "NICKNAME",
      "vcard:hasEmail": "mailto:YOUR-MAIL",
      "vcard:hasAddress": {
         "vcard:street-address": "STREET NAME",
         "vcard:postal-code": "ZIP CODE",
         "vcard:locality": "CITY",
         "vcard:country-name": "COUNTRY"
      },
      "vcard:hasTelephone": "tel:+0012131415",
      "vcard:hasURL": "URL-TO-YOUR-PRIVACY-POLICIES"
   },
   "permission": [{
      "target": "PATH-TO-/sitemap.xml",
      "action": "tdm:mine",
      "duty": [{
         "action": "obtainConsent" // OR compensate 
      }]
   }]
}
```
