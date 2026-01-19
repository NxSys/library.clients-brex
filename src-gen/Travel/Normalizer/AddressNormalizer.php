<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\Address::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\Address::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\Address();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('administrative_area', $data) && $data['administrative_area'] !== null) {
            $object->setAdministrativeArea($data['administrative_area']);
            unset($data['administrative_area']);
        }
        elseif (\array_key_exists('administrative_area', $data) && $data['administrative_area'] === null) {
            $object->setAdministrativeArea(null);
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
            unset($data['city']);
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('postal_code', $data) && $data['postal_code'] !== null) {
            $object->setPostalCode($data['postal_code']);
            unset($data['postal_code']);
        }
        elseif (\array_key_exists('postal_code', $data) && $data['postal_code'] === null) {
            $object->setPostalCode(null);
        }
        if (\array_key_exists('address_line_1', $data) && $data['address_line_1'] !== null) {
            $object->setAddressLine1($data['address_line_1']);
            unset($data['address_line_1']);
        }
        elseif (\array_key_exists('address_line_1', $data) && $data['address_line_1'] === null) {
            $object->setAddressLine1(null);
        }
        if (\array_key_exists('address_line_2', $data) && $data['address_line_2'] !== null) {
            $object->setAddressLine2($data['address_line_2']);
            unset($data['address_line_2']);
        }
        elseif (\array_key_exists('address_line_2', $data) && $data['address_line_2'] === null) {
            $object->setAddressLine2(null);
        }
        if (\array_key_exists('coordinates', $data)) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], \NxSys\Library\Clients\Brex\API\Travel\Model\AddressCoordinates::class, 'json', $context));
            unset($data['coordinates']);
        }
        if (\array_key_exists('timezone', $data) && $data['timezone'] !== null) {
            $object->setTimezone($data['timezone']);
            unset($data['timezone']);
        }
        elseif (\array_key_exists('timezone', $data) && $data['timezone'] === null) {
            $object->setTimezone(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('country')) {
            $dataArray['country'] = $data->getCountry();
        }
        if ($data->isInitialized('administrativeArea')) {
            $dataArray['administrative_area'] = $data->getAdministrativeArea();
        }
        if ($data->isInitialized('city')) {
            $dataArray['city'] = $data->getCity();
        }
        if ($data->isInitialized('postalCode')) {
            $dataArray['postal_code'] = $data->getPostalCode();
        }
        if ($data->isInitialized('addressLine1')) {
            $dataArray['address_line_1'] = $data->getAddressLine1();
        }
        if ($data->isInitialized('addressLine2')) {
            $dataArray['address_line_2'] = $data->getAddressLine2();
        }
        if ($data->isInitialized('coordinates') && null !== $data->getCoordinates()) {
            $dataArray['coordinates'] = $this->normalizer->normalize($data->getCoordinates(), 'json', $context);
        }
        if ($data->isInitialized('timezone')) {
            $dataArray['timezone'] = $data->getTimezone();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Travel\Model\Address::class => false];
    }
}