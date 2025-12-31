# BasicPatient - Basic FHIR Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BasicPatient**

## Resource Profile: BasicPatient 

| | |
| :--- | :--- |
| *Official URL*:https://omaremad101.github.io/basic-ig/StructureDefinition/BasicPatient | *Version*:0.1.0 |
| Draft as of 2025-12-31 | *Computable Name*:BasicPatient |

 
A basic patient profile requiring name. 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/example.basic.ig|current/StructureDefinition/BasicPatient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-BasicPatient.csv), [Excel](StructureDefinition-BasicPatient.xlsx), [Schematron](StructureDefinition-BasicPatient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "BasicPatient",
  "url" : "https://omaremad101.github.io/basic-ig/StructureDefinition/BasicPatient",
  "version" : "0.1.0",
  "name" : "BasicPatient",
  "status" : "draft",
  "date" : "2025-12-31T13:48:50+01:00",
  "publisher" : "abdelbar",
  "contact" : [
    {
      "name" : "abdelbar",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://example.org"
        },
        {
          "system" : "email",
          "value" : "your.email@example.com"
        }
      ]
    },
    {
      "name" : "abdelbar",
      "telecom" : [
        {
          "system" : "email",
          "value" : "your.email@example.com"
        }
      ]
    }
  ],
  "description" : "A basic patient profile requiring name.",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient"
      },
      {
        "id" : "Patient.name",
        "path" : "Patient.name",
        "min" : 1,
        "mustSupport" : true
      }
    ]
  }
}

```
