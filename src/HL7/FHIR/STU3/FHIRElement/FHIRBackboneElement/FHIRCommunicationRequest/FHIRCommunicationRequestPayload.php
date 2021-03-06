<?php

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest;

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

use HL7\FHIR\STU3\FHIRElement\FHIRAttachment;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;

/**
 * A request to convey information; e.g. the CDS system proposes that an alert be
 * sent to a responsible provider, the CDS system proposes that the public health
 * agency be notified about a reportable condition.
 *
 * Class FHIRCommunicationRequestPayload
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest
 */
class FHIRCommunicationRequestPayload extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST_DOT_PAYLOAD;
    const FIELD_CONTENT_ATTACHMENT = 'contentAttachment';
    const FIELD_CONTENT_REFERENCE = 'contentReference';
    const FIELD_CONTENT_STRING = 'contentString';
    const FIELD_CONTENT_STRING_EXT = '_contentString';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The communicated content (or for multi-part communications, one portion of the
     * communication).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRAttachment
     */
    protected $contentAttachment = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The communicated content (or for multi-part communications, one portion of the
     * communication).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected $contentReference = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The communicated content (or for multi-part communications, one portion of the
     * communication).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected $contentString = null;

    /**
     * Validation map for fields in type CommunicationRequest.Payload
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCommunicationRequestPayload Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCommunicationRequestPayload::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTENT_ATTACHMENT])) {
            if ($data[self::FIELD_CONTENT_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setContentAttachment($data[self::FIELD_CONTENT_ATTACHMENT]);
            } else {
                $this->setContentAttachment(new FHIRAttachment($data[self::FIELD_CONTENT_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_CONTENT_REFERENCE])) {
            if ($data[self::FIELD_CONTENT_REFERENCE] instanceof FHIRReference) {
                $this->setContentReference($data[self::FIELD_CONTENT_REFERENCE]);
            } else {
                $this->setContentReference(new FHIRReference($data[self::FIELD_CONTENT_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_CONTENT_STRING]) || isset($data[self::FIELD_CONTENT_STRING_EXT])) {
            if (isset($data[self::FIELD_CONTENT_STRING])) {
                $value = $data[self::FIELD_CONTENT_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONTENT_STRING_EXT]) && is_array($data[self::FIELD_CONTENT_STRING_EXT])) {
                $ext = $data[self::FIELD_CONTENT_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setContentString($value);
                } else if (is_array($value)) {
                    $this->setContentString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setContentString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setContentString(new FHIRString($ext));
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
        return "<CommunicationRequestPayload{$xmlns}></CommunicationRequestPayload>";
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The communicated content (or for multi-part communications, one portion of the
     * communication).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRAttachment
     */
    public function getContentAttachment()
    {
        return $this->contentAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The communicated content (or for multi-part communications, one portion of the
     * communication).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRAttachment $contentAttachment
     * @return static
     */
    public function setContentAttachment(FHIRAttachment $contentAttachment = null)
    {
        $this->contentAttachment = $contentAttachment;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The communicated content (or for multi-part communications, one portion of the
     * communication).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The communicated content (or for multi-part communications, one portion of the
     * communication).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $contentReference
     * @return static
     */
    public function setContentReference(FHIRReference $contentReference = null)
    {
        $this->contentReference = $contentReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The communicated content (or for multi-part communications, one portion of the
     * communication).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getContentString()
    {
        return $this->contentString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The communicated content (or for multi-part communications, one portion of the
     * communication).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRString $contentString
     * @return static
     */
    public function setContentString($contentString = null)
    {
        if (null === $contentString) {
            $this->contentString = null;
            return $this;
        }
        if ($contentString instanceof FHIRString) {
            $this->contentString = $contentString;
            return $this;
        }
        $this->contentString = new FHIRString($contentString);
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
        if (null !== ($v = $this->getContentAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContentReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContentString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_STRING] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_ATTACHMENT])) {
            $v = $this->getContentAttachment();
            foreach($validationRules[self::FIELD_CONTENT_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST_DOT_PAYLOAD, self::FIELD_CONTENT_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_ATTACHMENT])) {
                        $errs[self::FIELD_CONTENT_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_CONTENT_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_REFERENCE])) {
            $v = $this->getContentReference();
            foreach($validationRules[self::FIELD_CONTENT_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST_DOT_PAYLOAD, self::FIELD_CONTENT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_REFERENCE])) {
                        $errs[self::FIELD_CONTENT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CONTENT_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_STRING])) {
            $v = $this->getContentString();
            foreach($validationRules[self::FIELD_CONTENT_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST_DOT_PAYLOAD, self::FIELD_CONTENT_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_STRING])) {
                        $errs[self::FIELD_CONTENT_STRING] = [];
                    }
                    $errs[self::FIELD_CONTENT_STRING][$rule] = $err;
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
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload $type
     * @param null|int $libxmlOpts
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload
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
                throw new \DomainException(sprintf('FHIRCommunicationRequestPayload::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCommunicationRequestPayload::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCommunicationRequestPayload;
        } elseif (!is_object($type) || !($type instanceof FHIRCommunicationRequestPayload)) {
            throw new \RuntimeException(sprintf(
                'FHIRCommunicationRequestPayload::xmlUnserialize - $type must be instance of \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload or null, %s seen.',
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
        if (isset($children->contentAttachment)) {
            $type->setContentAttachment(FHIRAttachment::xmlUnserialize($children->contentAttachment));
        }
        if (isset($children->contentReference)) {
            $type->setContentReference(FHIRReference::xmlUnserialize($children->contentReference));
        }
        if (isset($children->contentString)) {
            $type->setContentString(FHIRString::xmlUnserialize($children->contentString));
        }
        if (isset($attributes->contentString)) {
            $pt = $type->getContentString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->contentString);
            } else {
                $type->setContentString((string)$attributes->contentString);
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
        if (null !== ($v = $this->getContentAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getContentReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getContentString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getContentAttachment())) {
            $a[self::FIELD_CONTENT_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getContentReference())) {
            $a[self::FIELD_CONTENT_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getContentString())) {
            $a[self::FIELD_CONTENT_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CONTENT_STRING_EXT] = $enc;
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