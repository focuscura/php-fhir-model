<?php

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 7th, 2020 11:57+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2020 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRBoolean;
use HL7\FHIR\STU3\FHIRElement\FHIRDate;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetCompose
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetCompose extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE;
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_INACTIVE = 'inactive';
    const FIELD_INACTIVE_EXT = '_inactive';
    const FIELD_INCLUDE = 'include';
    const FIELD_LOCKED_DATE = 'lockedDate';
    const FIELD_LOCKED_DATE_EXT = '_lockedDate';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
     */
    protected $exclude = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable ExpansionProfile (but generally, inactive codes would be expected
     * to be included).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    protected $inactive = null;

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
     */
    protected $include = [];

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a locked date is defined, then the Content Logical Definition must be
     * evaluated using the current version as of the locked date for referenced code
     * system(s) and value set instances where ValueSet.compose.include.version is not
     * defined.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDate
     */
    protected $lockedDate = null;

    /**
     * Validation map for fields in type ValueSet.Compose
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_INCLUDE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRValueSetCompose Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetCompose::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_EXCLUDE])) {
            if (is_array($data[self::FIELD_EXCLUDE])) {
                foreach($data[self::FIELD_EXCLUDE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRValueSetInclude) {
                        $this->addExclude($v);
                    } else {
                        $this->addExclude(new FHIRValueSetInclude($v));
                    }
                }
            } else if ($data[self::FIELD_EXCLUDE] instanceof FHIRValueSetInclude) {
                $this->addExclude($data[self::FIELD_EXCLUDE]);
            } else {
                $this->addExclude(new FHIRValueSetInclude($data[self::FIELD_EXCLUDE]));
            }
        }
        if (isset($data[self::FIELD_INACTIVE]) || isset($data[self::FIELD_INACTIVE_EXT])) {
            if (isset($data[self::FIELD_INACTIVE])) {
                $value = $data[self::FIELD_INACTIVE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INACTIVE_EXT]) && is_array($data[self::FIELD_INACTIVE_EXT])) {
                $ext = $data[self::FIELD_INACTIVE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setInactive($value);
                } else if (is_array($value)) {
                    $this->setInactive(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setInactive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setInactive(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_INCLUDE])) {
            if (is_array($data[self::FIELD_INCLUDE])) {
                foreach($data[self::FIELD_INCLUDE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRValueSetInclude) {
                        $this->addInclude($v);
                    } else {
                        $this->addInclude(new FHIRValueSetInclude($v));
                    }
                }
            } else if ($data[self::FIELD_INCLUDE] instanceof FHIRValueSetInclude) {
                $this->addInclude($data[self::FIELD_INCLUDE]);
            } else {
                $this->addInclude(new FHIRValueSetInclude($data[self::FIELD_INCLUDE]));
            }
        }
        if (isset($data[self::FIELD_LOCKED_DATE]) || isset($data[self::FIELD_LOCKED_DATE_EXT])) {
            if (isset($data[self::FIELD_LOCKED_DATE])) {
                $value = $data[self::FIELD_LOCKED_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LOCKED_DATE_EXT]) && is_array($data[self::FIELD_LOCKED_DATE_EXT])) {
                $ext = $data[self::FIELD_LOCKED_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setLockedDate($value);
                } else if (is_array($value)) {
                    $this->setLockedDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setLockedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLockedDate(new FHIRDate($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ValueSetCompose{$xmlns}></ValueSetCompose>";
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $exclude
     * @return static
     */
    public function addExclude(FHIRValueSetInclude $exclude = null)
    {
        $this->exclude[] = $exclude;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[] $exclude
     * @return static
     */
    public function setExclude(array $exclude = [])
    {
        $this->exclude = [];
        if ([] === $exclude) {
            return $this;
        }
        foreach($exclude as $v) {
            if ($v instanceof FHIRValueSetInclude) {
                $this->addExclude($v);
            } else {
                $this->addExclude(new FHIRValueSetInclude($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable ExpansionProfile (but generally, inactive codes would be expected
     * to be included).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable ExpansionProfile (but generally, inactive codes would be expected
     * to be included).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean $inactive
     * @return static
     */
    public function setInactive($inactive = null)
    {
        if (null === $inactive) {
            $this->inactive = null;
            return $this;
        }
        if ($inactive instanceof FHIRBoolean) {
            $this->inactive = $inactive;
            return $this;
        }
        $this->inactive = new FHIRBoolean($inactive);
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $include
     * @return static
     */
    public function addInclude(FHIRValueSetInclude $include = null)
    {
        $this->include[] = $include;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[] $include
     * @return static
     */
    public function setInclude(array $include = [])
    {
        $this->include = [];
        if ([] === $include) {
            return $this;
        }
        foreach($include as $v) {
            if ($v instanceof FHIRValueSetInclude) {
                $this->addInclude($v);
            } else {
                $this->addInclude(new FHIRValueSetInclude($v));
            }
        }
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a locked date is defined, then the Content Logical Definition must be
     * evaluated using the current version as of the locked date for referenced code
     * system(s) and value set instances where ValueSet.compose.include.version is not
     * defined.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDate
     */
    public function getLockedDate()
    {
        return $this->lockedDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a locked date is defined, then the Content Logical Definition must be
     * evaluated using the current version as of the locked date for referenced code
     * system(s) and value set instances where ValueSet.compose.include.version is not
     * defined.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRDate $lockedDate
     * @return static
     */
    public function setLockedDate($lockedDate = null)
    {
        if (null === $lockedDate) {
            $this->lockedDate = null;
            return $this;
        }
        if ($lockedDate instanceof FHIRDate) {
            $this->lockedDate = $lockedDate;
            return $this;
        }
        $this->lockedDate = new FHIRDate($lockedDate);
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getExclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getInactive())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INACTIVE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLockedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCKED_DATE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE])) {
            $v = $this->getExclude();
            foreach($validationRules[self::FIELD_EXCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE, self::FIELD_EXCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE])) {
                        $errs[self::FIELD_EXCLUDE] = [];
                    }
                    $errs[self::FIELD_EXCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INACTIVE])) {
            $v = $this->getInactive();
            foreach($validationRules[self::FIELD_INACTIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE, self::FIELD_INACTIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INACTIVE])) {
                        $errs[self::FIELD_INACTIVE] = [];
                    }
                    $errs[self::FIELD_INACTIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INCLUDE])) {
            $v = $this->getInclude();
            foreach($validationRules[self::FIELD_INCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE, self::FIELD_INCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INCLUDE])) {
                        $errs[self::FIELD_INCLUDE] = [];
                    }
                    $errs[self::FIELD_INCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCKED_DATE])) {
            $v = $this->getLockedDate();
            foreach($validationRules[self::FIELD_LOCKED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE, self::FIELD_LOCKED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCKED_DATE])) {
                        $errs[self::FIELD_LOCKED_DATE] = [];
                    }
                    $errs[self::FIELD_LOCKED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose $type
     * @param null|int $libxmlOpts
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRValueSetCompose::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRValueSetCompose::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRValueSetCompose;
        } elseif (!is_object($type) || !($type instanceof FHIRValueSetCompose)) {
            throw new \RuntimeException(sprintf(
                'FHIRValueSetCompose::xmlUnserialize - $type must be instance of \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->exclude)) {
            foreach($children->exclude as $child) {
                $type->addExclude(FHIRValueSetInclude::xmlUnserialize($child));
            }
        }
        if (isset($children->inactive)) {
            $type->setInactive(FHIRBoolean::xmlUnserialize($children->inactive));
        }
        if (isset($attributes->inactive)) {
            $pt = $type->getInactive();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->inactive);
            } else {
                $type->setInactive((string)$attributes->inactive);
            }
        }
        if (isset($children->include)) {
            foreach($children->include as $child) {
                $type->addInclude(FHIRValueSetInclude::xmlUnserialize($child));
            }
        }
        if (isset($children->lockedDate)) {
            $type->setLockedDate(FHIRDate::xmlUnserialize($children->lockedDate));
        }
        if (isset($attributes->lockedDate)) {
            $pt = $type->getLockedDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lockedDate);
            } else {
                $type->setLockedDate((string)$attributes->lockedDate);
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if ([] !== ($vs = $this->getExclude())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getInactive())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INACTIVE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getInclude())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INCLUDE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLockedDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCKED_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getExclude())) {
            $a[self::FIELD_EXCLUDE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EXCLUDE][] = $v;
            }
        }
        if (null !== ($v = $this->getInactive())) {
            $a[self::FIELD_INACTIVE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_INACTIVE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getInclude())) {
            $a[self::FIELD_INCLUDE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INCLUDE][] = $v;
            }
        }
        if (null !== ($v = $this->getLockedDate())) {
            $a[self::FIELD_LOCKED_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_LOCKED_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}