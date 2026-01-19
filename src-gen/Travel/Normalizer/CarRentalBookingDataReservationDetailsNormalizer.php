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
class CarRentalBookingDataReservationDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('confirmation_code', $data) && $data['confirmation_code'] !== null) {
            $object->setConfirmationCode($data['confirmation_code']);
            unset($data['confirmation_code']);
        }
        elseif (\array_key_exists('confirmation_code', $data) && $data['confirmation_code'] === null) {
            $object->setConfirmationCode(null);
        }
        if (\array_key_exists('pickup', $data)) {
            $object->setPickup($this->denormalizer->denormalize($data['pickup'], \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsPickup::class, 'json', $context));
            unset($data['pickup']);
        }
        if (\array_key_exists('drop_off', $data)) {
            $object->setDropOff($this->denormalizer->denormalize($data['drop_off'], \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsDropOff::class, 'json', $context));
            unset($data['drop_off']);
        }
        if (\array_key_exists('rental_company', $data) && $data['rental_company'] !== null) {
            $object->setRentalCompany($data['rental_company']);
            unset($data['rental_company']);
        }
        elseif (\array_key_exists('rental_company', $data) && $data['rental_company'] === null) {
            $object->setRentalCompany(null);
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
        if ($data->isInitialized('confirmationCode')) {
            $dataArray['confirmation_code'] = $data->getConfirmationCode();
        }
        $dataArray['pickup'] = $this->normalizer->normalize($data->getPickup(), 'json', $context);
        $dataArray['drop_off'] = $this->normalizer->normalize($data->getDropOff(), 'json', $context);
        if ($data->isInitialized('rentalCompany')) {
            $dataArray['rental_company'] = $data->getRentalCompany();
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
        return [\NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetails::class => false];
    }
}