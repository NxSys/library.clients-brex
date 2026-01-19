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
class LodgingBookingDataReservationDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetails();
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
        if (\array_key_exists('check_in_time', $data)) {
            $object->setCheckInTime($this->denormalizer->denormalize($data['check_in_time'], \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime::class, 'json', $context));
            unset($data['check_in_time']);
        }
        if (\array_key_exists('checkout_time', $data)) {
            $object->setCheckoutTime($this->denormalizer->denormalize($data['checkout_time'], \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckoutTime::class, 'json', $context));
            unset($data['checkout_time']);
        }
        if (\array_key_exists('room', $data)) {
            $object->setRoom($this->denormalizer->denormalize($data['room'], \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class, 'json', $context));
            unset($data['room']);
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
        $dataArray['check_in_time'] = $this->normalizer->normalize($data->getCheckInTime(), 'json', $context);
        $dataArray['checkout_time'] = $this->normalizer->normalize($data->getCheckoutTime(), 'json', $context);
        if ($data->isInitialized('room') && null !== $data->getRoom()) {
            $dataArray['room'] = $this->normalizer->normalize($data->getRoom(), 'json', $context);
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
        return [\NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetails::class => false];
    }
}