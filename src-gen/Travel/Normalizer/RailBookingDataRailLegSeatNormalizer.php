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
class RailBookingDataRailLegSeatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('coach_number', $data) && $data['coach_number'] !== null) {
            $object->setCoachNumber($data['coach_number']);
            unset($data['coach_number']);
        }
        elseif (\array_key_exists('coach_number', $data) && $data['coach_number'] === null) {
            $object->setCoachNumber(null);
        }
        if (\array_key_exists('seat_number', $data) && $data['seat_number'] !== null) {
            $object->setSeatNumber($data['seat_number']);
            unset($data['seat_number']);
        }
        elseif (\array_key_exists('seat_number', $data) && $data['seat_number'] === null) {
            $object->setSeatNumber(null);
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
        if ($data->isInitialized('coachNumber')) {
            $dataArray['coach_number'] = $data->getCoachNumber();
        }
        if ($data->isInitialized('seatNumber')) {
            $dataArray['seat_number'] = $data->getSeatNumber();
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
        return [\NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class => false];
    }
}