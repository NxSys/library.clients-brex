<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Team\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateCardRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\CreateCardRequest';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\CreateCardRequest';
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('owner', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['owner'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOwner($values);
            unset($data['owner']);
        }
        if (\array_key_exists('card_name', $data)) {
            $object->setCardName($data['card_name']);
            unset($data['card_name']);
        }
        if (\array_key_exists('card_type', $data)) {
            $object->setCardType($data['card_type']);
            unset($data['card_type']);
        }
        if (\array_key_exists('limit_type', $data)) {
            $object->setLimitType($data['limit_type']);
            unset($data['limit_type']);
        }
        if (\array_key_exists('spend_controls', $data)) {
            $object->setSpendControls($this->denormalizer->denormalize($data['spend_controls'], 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\CreateCardRequestSpendControls', 'json', $context));
            unset($data['spend_controls']);
        }
        if (\array_key_exists('mailing_address', $data)) {
            $object->setMailingAddress($this->denormalizer->denormalize($data['mailing_address'], 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\CreateCardRequestMailingAddress', 'json', $context));
            unset($data['mailing_address']);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setMetadata($values_1);
            unset($data['metadata']);
        } elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('card_attribute_preferences', $data)) {
            $object->setCardAttributePreferences($this->denormalizer->denormalize($data['card_attribute_preferences'], 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\CreateCardRequestCardAttributePreferences', 'json', $context));
            unset($data['card_attribute_preferences']);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getOwner() as $key => $value) {
            $values[$key] = $value;
        }
        $data['owner'] = $values;
        $data['card_name'] = $object->getCardName();
        $data['card_type'] = $object->getCardType();
        $data['limit_type'] = $object->getLimitType();
        if ($object->isInitialized('spendControls') && null !== $object->getSpendControls()) {
            $data['spend_controls'] = $this->normalizer->normalize($object->getSpendControls(), 'json', $context);
        }
        if ($object->isInitialized('mailingAddress') && null !== $object->getMailingAddress()) {
            $data['mailing_address'] = $this->normalizer->normalize($object->getMailingAddress(), 'json', $context);
        }
        if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
            $values_1 = [];
            foreach ($object->getMetadata() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $data['metadata'] = $values_1;
        }
        if ($object->isInitialized('cardAttributePreferences') && null !== $object->getCardAttributePreferences()) {
            $data['card_attribute_preferences'] = $this->normalizer->normalize($object->getCardAttributePreferences(), 'json', $context);
        }
        foreach ($object as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $data[$key_2] = $value_2;
            }
        }

        return $data;
    }
}
