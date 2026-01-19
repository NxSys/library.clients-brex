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
class LodgingBookingDataLodgingDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetails();
        if (\array_key_exists('star_rating', $data) && \is_int($data['star_rating'])) {
            $data['star_rating'] = (double) $data['star_rating'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('display_name', $data)) {
            $object->setDisplayName($data['display_name']);
            unset($data['display_name']);
        }
        if (\array_key_exists('contact_information', $data)) {
            $object->setContactInformation($this->denormalizer->denormalize($data['contact_information'], \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsContactInformation::class, 'json', $context));
            unset($data['contact_information']);
        }
        if (\array_key_exists('star_rating', $data) && $data['star_rating'] !== null) {
            $object->setStarRating($data['star_rating']);
            unset($data['star_rating']);
        }
        elseif (\array_key_exists('star_rating', $data) && $data['star_rating'] === null) {
            $object->setStarRating(null);
        }
        if (\array_key_exists('brand_name', $data) && $data['brand_name'] !== null) {
            $object->setBrandName($data['brand_name']);
            unset($data['brand_name']);
        }
        elseif (\array_key_exists('brand_name', $data) && $data['brand_name'] === null) {
            $object->setBrandName(null);
        }
        if (\array_key_exists('chain_name', $data) && $data['chain_name'] !== null) {
            $object->setChainName($data['chain_name']);
            unset($data['chain_name']);
        }
        elseif (\array_key_exists('chain_name', $data) && $data['chain_name'] === null) {
            $object->setChainName(null);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsLocation::class, 'json', $context));
            unset($data['location']);
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
        $dataArray['display_name'] = $data->getDisplayName();
        if ($data->isInitialized('contactInformation') && null !== $data->getContactInformation()) {
            $dataArray['contact_information'] = $this->normalizer->normalize($data->getContactInformation(), 'json', $context);
        }
        if ($data->isInitialized('starRating')) {
            $dataArray['star_rating'] = $data->getStarRating();
        }
        if ($data->isInitialized('brandName')) {
            $dataArray['brand_name'] = $data->getBrandName();
        }
        if ($data->isInitialized('chainName')) {
            $dataArray['chain_name'] = $data->getChainName();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $this->normalizer->normalize($data->getLocation(), 'json', $context);
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
        return [\NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetails::class => false];
    }
}