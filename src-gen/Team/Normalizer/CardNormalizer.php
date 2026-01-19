<?php

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
class CardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Team\Model\Card::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Team\Model\Card::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Team\Model\Card();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('owner', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['owner'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOwner($values);
            unset($data['owner']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('last_four', $data)) {
            $object->setLastFour($data['last_four']);
            unset($data['last_four']);
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
            $object->setSpendControls($this->denormalizer->denormalize($data['spend_controls'], \NxSys\Library\Clients\Brex\API\Team\Model\CardSpendControls::class, 'json', $context));
            unset($data['spend_controls']);
        }
        if (\array_key_exists('billing_address', $data)) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billing_address'], \NxSys\Library\Clients\Brex\API\Team\Model\Address::class, 'json', $context));
            unset($data['billing_address']);
        }
        if (\array_key_exists('mailing_address', $data)) {
            $object->setMailingAddress($this->denormalizer->denormalize($data['mailing_address'], \NxSys\Library\Clients\Brex\API\Team\Model\CardMailingAddress::class, 'json', $context));
            unset($data['mailing_address']);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setMetadata($values_1);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $values = [];
        foreach ($data->getOwner() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['owner'] = $values;
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        $dataArray['last_four'] = $data->getLastFour();
        $dataArray['card_name'] = $data->getCardName();
        if ($data->isInitialized('cardType') && null !== $data->getCardType()) {
            $dataArray['card_type'] = $data->getCardType();
        }
        $dataArray['limit_type'] = $data->getLimitType();
        if ($data->isInitialized('spendControls') && null !== $data->getSpendControls()) {
            $dataArray['spend_controls'] = $this->normalizer->normalize($data->getSpendControls(), 'json', $context);
        }
        $dataArray['billing_address'] = $this->normalizer->normalize($data->getBillingAddress(), 'json', $context);
        if ($data->isInitialized('mailingAddress') && null !== $data->getMailingAddress()) {
            $dataArray['mailing_address'] = $this->normalizer->normalize($data->getMailingAddress(), 'json', $context);
        }
        if ($data->isInitialized('metadata')) {
            $values_1 = [];
            foreach ($data->getMetadata() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['metadata'] = $values_1;
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Team\Model\Card::class => false];
    }
}