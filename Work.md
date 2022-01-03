@if ($photo)
                                    @if (($photo->getSize() /1048576) > 1 || ($photo->extension()!='png') || ($photo->extension()!='jpg'))

                                    @else
                                    @endif
                                @else
                                @endif