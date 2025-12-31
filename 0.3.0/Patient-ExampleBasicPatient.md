# ExampleBasicPatient - Basic FHIR Implementation Guide v0.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ExampleBasicPatient**

## Example Patient: ExampleBasicPatient

Profile: [BasicPatient](StructureDefinition-BasicPatient.md)

Omar Abdelbar (no stated gender), DoB Unknown

-------

| | |
| :--- | :--- |
|  | Blue |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "ExampleBasicPatient",
  "meta" : {
    "profile" : [
      "https://omaremad101.github.io/basic-ig/StructureDefinition/BasicPatient"
    ]
  },
  "extension" : [
    {
      "url" : "https://omaremad101.github.io/basic-ig/StructureDefinition/FavoriteColor",
      "valueString" : "Blue"
    }
  ],
  "name" : [
    {
      "family" : "Abdelbar",
      "given" : ["Omar"]
    }
  ]
}

```
