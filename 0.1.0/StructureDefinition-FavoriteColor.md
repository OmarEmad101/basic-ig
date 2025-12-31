# FavoriteColor - Basic FHIR Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FavoriteColor**

## Extension: FavoriteColor 

| | |
| :--- | :--- |
| *Official URL*:https://omaremad101.github.io/basic-ig/StructureDefinition/FavoriteColor | *Version*:0.1.0 |
| Draft as of 2025-12-31 | *Computable Name*:FavoriteColor |

Example extension for patient's favorite color.

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/example.basic.ig|current/StructureDefinition/FavoriteColor)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-FavoriteColor.csv), [Excel](StructureDefinition-FavoriteColor.xlsx), [Schematron](StructureDefinition-FavoriteColor.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "FavoriteColor",
  "url" : "https://omaremad101.github.io/basic-ig/StructureDefinition/FavoriteColor",
  "version" : "0.1.0",
  "name" : "FavoriteColor",
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
  "description" : "Example extension for patient's favorite color.",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Patient"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "definition" : "Example extension for patient's favorite color."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "https://omaremad101.github.io/basic-ig/StructureDefinition/FavoriteColor"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "string"
          }
        ]
      }
    ]
  }
}

```
