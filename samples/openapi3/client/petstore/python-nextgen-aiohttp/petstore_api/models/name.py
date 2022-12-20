# coding: utf-8

"""
    OpenAPI Petstore

    This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\  # noqa: E501

    The version of the OpenAPI document: 1.0.0
    Generated by: https://openapi-generator.tech
"""


from __future__ import annotations
from inspect import getfullargspec
import pprint
import re  # noqa: F401
import json


from typing import Optional
from pydantic import BaseModel, Field, StrictInt, StrictStr

class Name(BaseModel):
    """NOTE: This class is auto generated by OpenAPI Generator.
    Ref: https://openapi-generator.tech

    Do not edit the class manually.
    """
    name: StrictInt = ...
    snake_case: Optional[StrictInt] = None
    var_property: Optional[StrictStr] = Field(None, alias="property")
    var_123_number: Optional[StrictInt] = Field(None, alias="123Number")
    __properties = ["name", "snake_case", "property", "123Number"]

    class Config:
        allow_population_by_field_name = True
        validate_assignment = True

    def to_str(self) -> str:
        """Returns the string representation of the model using alias"""
        return pprint.pformat(self.dict(by_alias=True))

    def to_json(self) -> str:
        """Returns the JSON representation of the model using alias"""
        return json.dumps(self.to_dict())

    @classmethod
    def from_json(cls, json_str: str) -> Name:
        """Create an instance of Name from a JSON string"""
        return cls.from_dict(json.loads(json_str))

    def to_dict(self):
        """Returns the dictionary representation of the model using alias"""
        _dict = self.dict(by_alias=True,
                          exclude={
                            "snake_case",
                            "var_123_number",
                          },
                          exclude_none=True)
        return _dict

    @classmethod
    def from_dict(cls, obj: dict) -> Name:
        """Create an instance of Name from a dict"""
        if obj is None:
            return None

        if type(obj) is not dict:
            return Name.parse_obj(obj)

        _obj = Name.parse_obj({
            "name": obj.get("name"),
            "snake_case": obj.get("snake_case"),
            "var_property": obj.get("property"),
            "var_123_number": obj.get("123Number")
        })
        return _obj

